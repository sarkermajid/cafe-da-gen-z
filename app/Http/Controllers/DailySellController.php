<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailySell;
use App\Models\MenuPrice;
use Illuminate\Http\Request;

class DailySellController extends Controller
{
    public function AddDailySells()
    {
        return view('admin.add_daily_sells');
    }

    public function StoreDailySells(Request $request)
    {
        // List of all fields to be processed
        $fields = [
            'date', 'regular_mb', 'special_mb', 'chicken_momo_5', 'sre_momo_5', 'bbq_momo_5',
            'cheese_momo_5', 'm_burger', 'r_burger', 'c_burger', 's_burger',
            'chow_mein_11', 'chow_mein_12', 'chow_mein_13', 's_chow_mein_11',
            'r_sauce_pasta', 'w_sauce_pasta', 'c_soup', 't_soup', 'm_soup',
            'c_l_4', 'c_w_4', 'c_b_4', 'c_pop_100', 'c_pop_200', 'c_pop_250',
            'french_fry', 'potatoe_wings', 'k_singara', 'm_lemonade', 'f_lemonade',
            'lassi', 'cold_coffe', 'c_cold_coffe', 'o_cold_coffe'
        ];

        // Create validation rules
        $validationRules = array_fill_keys(array_slice($fields, 1), 'nullable|numeric'); // Skip 'date'
        $validationRules['date'] = 'required';

        $request->validate($validationRules);

        // Create a new DailySell entry
        $dailySell = new DailySell();
        foreach ($fields as $field) {
            $dailySell->$field = $request->input($field) ?? 0; // Assign 0 if not provided, except date
        }

        $dailySell->save();

        $menuPrice = MenuPrice::first();
        $totalSell = 0;

        // Calculate the total sales amount
        foreach (array_slice($fields, 1) as $field) { // Skip 'date' for total calculation
            if (isset($menuPrice->$field)) { // Ensure field exists in MenuPrice
                $totalSell += $menuPrice->$field * $dailySell->$field;
            }
        }

        // Save the total sell amount to the dailySell record
        $dailySell->total_price = $totalSell;
        $dailySell->save();

        return redirect()->route('admin.daily.sells')->with('success', 'Daily sells recorded successfully!');
    }


    public function DailySells()
    {
        $dailySells = DailySell::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.daily_sells',compact('dailySells'));
    }

    public function ViewDailySells($id)
    {
        $dailySell = DailySell::find($id);
        return view('admin.view_daily_sells', compact('dailySell'));
    }

    public function DeleteDailySells($id)
    {
        $dailySell = DailySell::find($id);
        $dailySell->delete();
        return redirect()->route('admin.daily.sells')->with('success', 'Daily sells deleted successfully!');
    }

}
