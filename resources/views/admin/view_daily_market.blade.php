@extends('admin.admin_dashboard')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Daily Market</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body py-5">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>Date :</strong></td>
                                <td class="text-style">{{ $dailyMarket->date }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chicken_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Tomato Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->tomato_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Tomato Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->tomato_sauce_p }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chili Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->bbq_momo_5 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Burger Bun Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->cheese_momo_5 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Burger Bun Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->m_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oil Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->r_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oil Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Milk Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->s_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Milk Powder Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chow_mein_11 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chow_mein_12 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Powder Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->chow_mein_13 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Garam Masala Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->s_chow_mein_11 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Garam Masala Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->r_sauce_pasta }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Butter Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->w_sauce_pasta }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Butter Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_soup }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oregano Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->t_soup }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oregano Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->m_soup }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sugar Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_pop_100 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sugar Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_pop_200 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vegetable Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_pop_250 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vegetable Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_l_4 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Fish Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_w_4 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Fish Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_b_4 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>BBQ Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->french_fry }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>BBQ Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->potatoe_wings }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Soya Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->k_singara }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Soya Sauce Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->m_lemonade }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cocoa Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->f_lemonade }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cocoa Powder Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->lassi }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Choco Syrup Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->cold_coffe }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Choco Syrup Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->c_cold_coffe }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Gas Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->o_cold_coffe }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Gas Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Electricity Unit :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Electricity Bill :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mashroom Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mashroom Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Black Olives Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Black Olives Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sausage Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sausage Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Ball Quantity :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Ball Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Momo Sheet Quantity:</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Momo Sheet Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Rent Bill :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Total Price :</strong></td>
                                <td class="text-style">{{ $dailyMarket->total_price }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
