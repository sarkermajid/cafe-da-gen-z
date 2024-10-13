<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MenuPrice;
use Illuminate\Http\Request;

class MenuPriceController extends Controller
{
    public function MenuPrice()
    {
        $menuPrice = MenuPrice::first();
        return view('admin.menu_price',compact('menuPrice'));
    }
    public function MenuPriceUpdate(Request $request){
        $request->validate([
            'regular_mb' => 'numeric',
            'special_mb' => 'numeric',
            'chicken_momo_5' => 'numeric',
            'sre_momo_5' => 'numeric',
            'bbq_momo_5' => 'numeric',
            'cheese_momo_5' => 'numeric',
            'm_burger' => 'numeric',
            'r_burger' => 'numeric',
            'c_burger' => 'numeric',
            's_burger' => 'numeric',
            'chow_mein_11' => 'numeric',
            'chow_mein_12' => 'numeric',
            'chow_mein_13' => 'numeric',
            's_chow_mein_11' => 'numeric',
            'r_sauce_pasta' => 'numeric',
            'w_sauce_pasta' => 'numeric',
            'c_soup' => 'numeric',
            't_soup' => 'numeric',
            'm_soup' => 'numeric',
            'c_l_4' => 'numeric',
            'c_w_4' => 'numeric',
            'c_b_4' => 'numeric',
            'c_pop_100' => 'numeric',
            'c_pop_200' => 'numeric',
            'c_pop_250' => 'numeric',
            'french_fry' => 'numeric',
            'potatoe_wings' => 'numeric',
            'k_singara' => 'numeric',
            'm_lemonade' => 'numeric',
            'f_lemonade' => 'numeric',
            'lassi' => 'numeric',
            'cold_coffe' => 'numeric',
            'c_cold_coffe' => 'numeric',
            'o_cold_coffe' => 'numeric',
        ]);

        $menuPrice = MenuPrice::first();
        $menuPrice->regular_mb = $request->regular_mb;
        $menuPrice->special_mb = $request->special_mb;
        $menuPrice->chicken_momo_5 = $request->chicken_momo_5;
        $menuPrice->sre_momo_5 = $request->sre_momo_5;
        $menuPrice->bbq_momo_5 = $request->bbq_momo_5;
        $menuPrice->cheese_momo_5 = $request->cheese_momo_5;
        $menuPrice->m_burger = $request->m_burger;
        $menuPrice->r_burger = $request->r_burger;
        $menuPrice->c_burger = $request->c_burger;
        $menuPrice->s_burger = $request->s_burger;
        $menuPrice->chow_mein_11 = $request->chow_mein_11;
        $menuPrice->chow_mein_12 = $request->chow_mein_12;
        $menuPrice->chow_mein_13 = $request->chow_mein_13;
        $menuPrice->s_chow_mein_11 = $request->s_chow_mein_11;
        $menuPrice->r_sauce_pasta = $request->r_sauce_pasta;
        $menuPrice->w_sauce_pasta = $request->w_sauce_pasta;
        $menuPrice->c_soup = $request->c_soup;
        $menuPrice->t_soup = $request->t_soup;
        $menuPrice->m_soup = $request->m_soup;
        $menuPrice->c_l_4 = $request->c_l_4;
        $menuPrice->c_w_4 = $request->c_w_4;
        $menuPrice->c_b_4 = $request->c_b_4;
        $menuPrice->c_pop_100 = $request->c_pop_100;
        $menuPrice->c_pop_200 = $request->c_pop_200;
        $menuPrice->c_pop_250 = $request->c_pop_250;
        $menuPrice->french_fry = $request->french_fry;
        $menuPrice->potatoe_wings = $request->potatoe_wings;
        $menuPrice->k_singara = $request->k_singara;
        $menuPrice->m_lemonade = $request->m_lemonade;
        $menuPrice->f_lemonade = $request->f_lemonade;
        $menuPrice->lassi = $request->lassi;
        $menuPrice->cold_coffe = $request->cold_coffe;
        $menuPrice->c_cold_coffe = $request->c_cold_coffe;
        $menuPrice->o_cold_coffe = $request->o_cold_coffe;
        $menuPrice->save();
        return redirect()->back()->with('success', 'Menu Price has been updated successfully.');

    }
}
