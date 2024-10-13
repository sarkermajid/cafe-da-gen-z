<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DailyMarketController;
use App\Http\Controllers\DailySellController;
use App\Http\Controllers\MenuPriceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__.'/auth.php';

Route::get('/', [UserController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
        Route::get('admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
    });

    Route::controller(MenuPriceController::class)->group(function () {
        Route::get('admin/menu-price', 'MenuPrice')->name('admin.menu.price');
        Route::post('admin/menu-price-update', 'MenuPriceUpdate')->name('admin.menu.price.update');
        Route::get('admin/daily-sells', 'DailySells')->name('admin.daily.sells');
        Route::get('admin/add-daily-sells', 'AddDailySells')->name('admin.add.daily.sells');
    });

    Route::controller(DailySellController::class)->group(function () {
        Route::get('admin/daily-sells', 'DailySells')->name('admin.daily.sells');
        Route::get('admin/add-daily-sells', 'AddDailySells')->name('admin.add.daily.sells');
        Route::post('admin/store-daily-sells', 'StoreDailySells')->name('admin.store.daily.sells');
        Route::get('admin/view-daily-sells/{id}', 'ViewDailySells')->name('admin.view.daily.sells');
        Route::get('admin/delete-daily-sells/{id}', 'DeleteDailySells')->name('admin.delete.daily.sells');
    });

    Route::controller(DailyMarketController::class)->group(function () {
        Route::get('admin/daily-market', 'DailyMarket')->name('admin.daily.market');
        Route::get('admin/add-daily-market', 'AddDailyMarket')->name('admin.add.daily.market');
        Route::post('admin/store-daily-market', 'StoreDailyMarket')->name('admin.store.daily.market');
        Route::get('admin/view-daily-market/{id}', 'ViewDailyMarket')->name('admin.view.daily.market');
        Route::get('admin/delete-daily-market/{id}', 'DeleteDailyMarket')->name('admin.delete.daily.market');
    });
});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
