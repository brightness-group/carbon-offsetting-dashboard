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

Route::any('stripe/webhook', 'StripeController@webhook');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', 'CarbonClickController@dashboard')->name('dashboard');

    Route::delete('/shops/{id}', 'ShopController@delete')->name('shops.destroy');
    Route::get('/shops/export', 'ShopController@export')->name('shops.export');
    Route::post('/shops/toggle-block/{id}', 'ShopController@toggleBlock');
});
