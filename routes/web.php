<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('scorders', App\Http\Controllers\scorderController::class);


Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('orderdetails', App\Http\Controllers\orderdetailController::class);

Route::get('product/displaygrid', 'App\Http\Controllers\productController@displaygrid')->name('products.displaygrid');

Route::get('product/additem/{id}', 'App\Http\Controllers\productController@additem')->name('products.additem');

Route::get('product/emptycart', 'App\Http\Controllers\productController@emptycart')->name('products.emptycart');

Route::get('scorders/checkout', 'App\Http\Controllers\scorderController@checkout')->name('scorders.checkout');

Route::post('scorder/placeorder', 'App\Http\Controllers\scorderController@placeorder')->name('scorders.placeorder');
