<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreImageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('disneyplus', 'App\Http\Controllers\DisneyplusController@create')->name('disneyplus.create');
Route::post('disneyplus', 'App\Http\Controllers\DisneyplusController@store')->name('disneyplus.store');
Route::get('disneyplus/list', 'App\Http\Controllers\DisneyplusController@index')->name('disneyplus.index');
Route::get('downloadPDF/{id}','App\Http\Controllers\DisneyplusController@downloadPDF');
Route::get('barcode', 'App\Http\Controllers\BarcodeController@barcode');

Route::get('store_image', 'App\Http\Controllers\StoreImageController@index');
Route::post('store_image/insert_image', 'App\Http\Controllers\StoreImageController@insert_image');
Route::get('store_image/fetch_image/{id}', 'App\Http\Controllers\StoreImageController@fetch_image');


