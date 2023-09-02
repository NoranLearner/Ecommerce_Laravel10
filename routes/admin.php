<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;

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

/* Route::get('/testLayout', function () {
    return view('dashboard.dashboard');
})->name('admin.dashboard');
 */
//Use Prefix admin for all file route

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function () {

    Route::get('login', [LoginController::class, 'getLogin'])->name('admin.getLogin');

    Route::post('login', [LoginController::class, 'postLogin'])->name('admin.postLogin');

});
