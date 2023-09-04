<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashboard\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function(){

    //Use Prefix admin for all file route

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin', 'prefix'=>'admin'], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::group(['prefix'=>'settings'], function () {

            Route::get('shipping-methods/{type}', [SettingsController::class, 'editShippingMethods'])->name('edit.shipping.methods');

            Route::put('shipping-methods/{id}', [SettingsController::class, 'updateShippingMethods'])->name('update.shipping.methods');

        });

    });

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix'=>'admin'], function () {

        Route::get('login', [LoginController::class, 'getLogin'])->name('admin.getLogin');

        Route::post('login', [LoginController::class, 'postLogin'])->name('admin.postLogin');

    });

});

