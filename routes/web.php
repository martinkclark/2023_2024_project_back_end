<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\VendorController;
use App\Http\Controllers\VendorTransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('api/vendor-transactions', VendorTransactionController::class);
Route::resource('api/vendors', VendorController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    echo "hii";
});

Route::controller(AdminController::class)->group(function () {
    //  Route::get('test', 'test');
});

