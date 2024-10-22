@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('admin.store.daily.expense') }}" class="forms-sample"
                                id="myForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Select Market List</label>
                                            <select name="daily_market_id" class="form-control">
                                                <option value="">Select Market</option>
                                                @foreach ($dailyMarkets as $market)
                                                    <option value="{{ $market->id }}">{{ $market->date }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="text" name="date" class="form-control" placeholder="Today Date"
                                                id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="chicken_q" class="form-label">Chicken Quantity</label>
                                            <input type="text" name="chicken_q"  class="form-control" placeholder="Quantity"
                                                id="chicken_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="tomato_sauce_q" class="form-label">Tomato Sauce Quantity</label>
                                            <input type="text" name="tomato_sauce_q"  class="form-control" placeholder="Quantity"
                                                id="tomato_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="chili_sauce_q" class="form-label">Chili Sauce Quantity</label>
                                            <input type="text" name="chili_sauce_q"  class="form-control" placeholder="Quantity"
                                                id="chili_sauce_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="burger_bun_q" class="form-label">Burger Bun Quantity</label>
                                            <input type="text" name="burger_bun_q"  class="form-control" placeholder="Quantity"
                                                id="burger_bun_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="oil_q" class="form-label">Oil Quantity</label>
                                            <input type="text" name="oil_q"  class="form-control" placeholder="Quantity"
                                                id="oil_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="milk_powder_q" class="form-label">Milk Powder Quantity</label>
                                            <input type="text" name="milk_powder_q"  class="form-control" placeholder="Quantity"
                                                id="milk_powder_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="chicken_powder_q" class="form-label">Chicken Powder Quantity</label>
                                            <input type="text" name="chicken_powder_q"  class="form-control" placeholder="Quantity"
                                                id="chicken_powder_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="garam_masala_q" class="form-label">Garam Masala Quantity</label>
                                            <input type="text" name="garam_masala_q"  class="form-control" placeholder="Quantity"
                                                id="garam_masala_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="butter_q" class="form-label">Butter Quantity</label>
                                            <input type="text" name="butter_q"  class="form-control" placeholder="Quantity"
                                                id="butter_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="oregano_q" class="form-label">Oregano Quantity</label>
                                            <input type="text" name="oregano_q"  class="form-control" placeholder="Quantity"
                                                id="oregano_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="sugar_q" class="form-label">Sugar Quantity</label>
                                            <input type="text" name="sugar_q"  class="form-control" placeholder="Quantity"
                                                id="sugar_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="vegetable_q" class="form-label">Vegetable Quantity</label>
                                            <input type="text" name="vegetable_q"  class="form-control" placeholder="Quantity"
                                                id="vegetable_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="fish_sauce_q" class="form-label">Fish Sauce Quantity</label>
                                            <input type="text" name="fish_sauce_q"  class="form-control" placeholder="Quantity"
                                                id="fish_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="bbq_sauce_q" class="form-label">BBQ Sauce Quantity</label>
                                            <input type="text" name="bbq_sauce_q"  class="form-control" placeholder="Quantity"
                                                id="bbq_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="soya_sauce_q" class="form-label">Soya Sauce Quantity</label>
                                            <input type="text" name="soya_sauce_q"  class="form-control" placeholder="Quantity"
                                                id="soya_sauce_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="cocoa_powder_q" class="form-label">Cocoa Powder Quantity</label>
                                            <input type="text" name="cocoa_powder_q"  class="form-control" placeholder="Quantity"
                                                id="cocoa_powder_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="choco_syrup_q" class="form-label">Choco Syrup Quantity</label>
                                            <input type="text" name="choco_syrup_q"  class="form-control" placeholder="Quantity"
                                                id="choco_syrup_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="gas_q" class="form-label">Gas Quantity</label>
                                            <input type="text" name="gas_q"  class="form-control" placeholder="Quantity"
                                                id="gas_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="mushroom_q" class="form-label">Mashroom Quantity</label>
                                            <input type="text" name="mushroom_q"  class="form-control" placeholder="Quantity"
                                                id="mushroom_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="black_olives_q" class="form-label">Black Olives Quantity</label>
                                            <input type="text" name="black_olives_q"  class="form-control" placeholder="Quantity"
                                                id="black_olives_q">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="sausage_q" class="form-label">Sausage Quantity</label>
                                            <input type="text" name="sausage_q"  class="form-control" placeholder="Quantity"
                                                id="sausage_q">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_ball_q" class="form-label">Chicken Ball Quantity</label>
                                            <input type="text" name="chicken_ball_q"  class="form-control" placeholder="Quantity"
                                                id="chicken_ball_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="momo_sheet_q" class="form-label">Momo Sheet Quantity</label>
                                            <input type="text" name="momo_sheet_q"  class="form-control" placeholder="Quantity"
                                                id="momo_sheet_q">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
