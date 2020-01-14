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

//Route::get('/', function () {
//    return view('layouts.main');
//});

Route::get('/','Admin\DashboardController@index');

Route::get('/zuhair','Admin\DashboardController@zuhair')->name('me.zuhair');
Route::get('/zubair','Admin\DashboardController@zubair')->name('me.zubair');

Route::get('charts/zawad','Admin\DashboardController@zawad')->name('me.zawad');
Route::get('charts/mizan','Admin\DashboardController@mizan')->name('me.mizan');

Route::resource('posts','PostController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('sales/orders','SaleController@order')->name('sales.orders');
Route::get('sales/shipments','SaleController@shipment')->name('sales.shipments');
Route::get('sales/invoices','SaleController@invoice')->name('sales.invoices');

Route::get('categories','Admin\CategoryController@index')->name('categories.index');
Route::post('category/store','Admin\CategoryController@store')->name('category.store');


Route::get('products','Admin\ProductController@index')->name('products.index');
Route::post('product/store','Admin\ProductController@store')->name('product.store');

Route::get('home','Front\FrontMainController@index');
Route::get('category','CategoryController@frontcat');
Route::get('product','Front\FrontProductController@index');
Route::get('cart','CartController@index');
Route::get('checkout','CheckoutController@index');
Route::get('contact','ContactController@index');