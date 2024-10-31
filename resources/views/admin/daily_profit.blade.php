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
                            <form method="POST" action="{{ route('admin.calculate.daily.profit') }}" class="forms-sample"
                                id="myForm">
                                @csrf
                                <h3 class="text-center pb-5">Daily Profit Calculation</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="text" name="date"  class="form-control" placeholder="Today Date"
                                                id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Select Sells List</label>
                                            <select name="daily_sell_id" class="form-control">
                                                <option value="">Select Sells</option>
                                                @foreach ($dailySells as $sell)
                                                    <option value="{{ $sell->id }}">{{ $sell->date }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Select Expenses List</label>
                                            <select name="daily_expense_id" class="form-control">
                                                <option value="">Select Expense</option>
                                                @foreach ($dailyExpenses as $expense)
                                                    <option value="{{ $expense->id }}">{{ $expense->date }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-success me-2">Calculate</button>
                            </form>

                            <div class="row py-5">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">All Daily Profits</h6>
                                            <div class="table-responsive">
                                                <table id="dataTableExample" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Date</th>
                                                            <th>Profit</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dailyProfits as $key => $item)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ $item->date }}</td>
                                                                <td>{{ $item->profit.' BDT'}}</td>
                                                                <td>
                                                                    <a href="" id="delete" class="btn btn-inverse-danger"> Delete </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
