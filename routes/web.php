<?php

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

Route::get('/','homeController@index');
Route::get('/productimport','productController@index');
Route::post('products/import', 'productController@import');
Route::get('/addtocart/{pid}', 'homeController@add_to_cart');
Route::get('/cart', 'homeController@show_cart');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
