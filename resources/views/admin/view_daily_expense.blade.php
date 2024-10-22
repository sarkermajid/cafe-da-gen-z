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
                                <td class="text-style">{{ $dailyExpense->date }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->chicken_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Tomato Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->tomato_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chili Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->chili_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Burger Bun Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->burger_bun_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oil Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->oil_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Milk Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->milk_powder_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->chicken_powder_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Garam Masala Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->garam_masala_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Butter Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->butter_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oregano Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->oregano_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sugar Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->sugar_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Vegetable Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->vegetable_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Fish Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->fish_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>BBQ Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->bbq_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Soya Sauce Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->soya_sauce_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cocoa Powder Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->cocoa_powder_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Choco Syrup Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->choco_syrup_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Gas Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->gas_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mashroom Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->mushroom_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Black Olives Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->black_olives_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sausage Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->sausage_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Ball Quantity :</strong></td>
                                <td class="text-style">{{ $dailyExpense->chicken_ball_q }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Momo Sheet Quantity:</strong></td>
                                <td class="text-style">{{ $dailyExpense->momo_sheet_q }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
