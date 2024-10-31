<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailyExpense;
use App\Models\DailyMarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyExpenseController extends Controller
{
    public function DailyExpense()
    {
        $dailyExpenses = DailyExpense::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.daily_expense',compact('dailyExpenses'));
    }

    public function AddDailyExpense()
    {
        $dailyMarkets = DailyMarket::orderBy('created_at', 'asc')->get();
        return view('admin.add_daily_expense',compact('dailyMarkets'));
    }

    public function StoreDailyExpense(Request $request)
    {
        // Define the fields that are relevant to daily expenses
        $fields = [
            'chicken', 'tomato_sauce', 'chili_sauce', 'burger_bun', 'oil',
            'milk_powder', 'chicken_powder', 'garam_masala', 'butter', 'oregano',
            'sugar', 'vegetable', 'fish_sauce', 'bbq_sauce', 'soya_sauce',
            'cocoa_powder', 'choco_syrup', 'gas',
            'mushroom', 'black_olives', 'sausage', 'chicken_ball', 'momo_sheet'
        ];

        // Set up validation rules dynamically
        $rules = collect($fields)->mapWithKeys(fn($field) => [
            "{$field}_q" => 'nullable|integer|min:0'
        ])->toArray();
        $rules['daily_market_id'] = 'required|exists:daily_markets,id';
        $rules['date'] = 'required';
        $request->validate($rules);

        // Retrieve the relevant DailyMarket entry
        $dailyMarket = DailyMarket::find($request->daily_market_id);

        // Loop through the fields and subtract quantities if sufficient stock exists
        foreach ($fields as $field) {
            $quantityField = "{$field}_q";

            // Check if the quantity is provided in the request and if stock is sufficient
            if ($request->filled($quantityField)) {
                $requestedQuantity = (int) $request->$quantityField;
                $currentQuantity = (int) $dailyMarket->$quantityField;

                if ($currentQuantity >= $requestedQuantity) {
                    $dailyMarket->$quantityField = $currentQuantity - $requestedQuantity;
                } else {
                    // If stock is insufficient, redirect with a warning message
                    return redirect()->back()
                        ->with('warning', "Insufficient stock for {$field}!");
                }
            }
        }

        // Save the updated DailyMarket entry
        $dailyMarket->save();


        // Save the new daily expense record
        $dailyExpense = new DailyExpense();

        // Manually assign values from the request, ensuring only non-empty ones are saved
        $dailyExpense->chicken_q = $request->input('chicken_q', 0);
        $dailyExpense->tomato_sauce_q = $request->input('tomato_sauce_q', 0);
        $dailyExpense->chili_sauce_q = $request->input('chili_sauce_q', 0);
        $dailyExpense->burger_bun_q = $request->input('burger_bun_q', 0);
        $dailyExpense->oil_q = $request->input('oil_q', 0);
        $dailyExpense->milk_powder_q = $request->input('milk_powder_q', 0);
        $dailyExpense->chicken_powder_q = $request->input('chicken_powder_q', 0);
        $dailyExpense->garam_masala_q = $request->input('garam_masala_q', 0);
        $dailyExpense->butter_q = $request->input('butter_q', 0);
        $dailyExpense->oregano_q = $request->input('oregano_q', 0);
        $dailyExpense->sugar_q = $request->input('sugar_q', 0);
        $dailyExpense->vegetable_q = $request->input('vegetable_q', 0);
        $dailyExpense->fish_sauce_q = $request->input('fish_sauce_q', 0);
        $dailyExpense->bbq_sauce_q = $request->input('bbq_sauce_q', 0);
        $dailyExpense->soya_sauce_q = $request->input('soya_sauce_q', 0);
        $dailyExpense->cocoa_powder_q = $request->input('cocoa_powder_q', 0);
        $dailyExpense->choco_syrup_q = $request->input('choco_syrup_q', 0);
        $dailyExpense->gas_q = $request->input('gas_q', 0);
        $dailyExpense->mushroom_q = $request->input('mushroom_q', 0);
        $dailyExpense->black_olives_q = $request->input('black_olives_q', 0);
        $dailyExpense->sausage_q = $request->input('sausage_q', 0);
        $dailyExpense->chicken_ball_q = $request->input('chicken_ball_q', 0);
        $dailyExpense->momo_sheet_q = $request->input('momo_sheet_q', 0);

        // Assign other necessary fields
        $dailyExpense->daily_market_id = $request->daily_market_id;
        $dailyExpense->date = $request->date;

        // Save the record
        $dailyExpense->save();

        return redirect()->route('admin.daily.expense')->with('success', 'Daily Expenses Saved Successfully!');

    }

    public function DeleteDailyExpense($id)
    {
        $dailyExpense = DailyExpense::find($id);
        $dailyExpense->delete();
        return redirect()->route('admin.daily.expense')->with('success', 'Daily Expenses Deleted Successfully!');
    }

    public function ViewDailyExpense($id)
    {
        $dailyExpense = DailyExpense::find($id);
        return view('admin.view_daily_expense',compact('dailyExpense'));
    }
}
