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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/fast-food', 'FastFoodUIController@index')->name('fast-food');

Route::get('/cakes', 'CakesUIController@index')->name('cakes');

Route::get('/chocolates&sweets', 'SweetUIController@index')->name('chocolates&sweets');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function(){
    Route::get('dashboard', 'DashboardController@index') ->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
    Route::resource('fastfood', 'FastfoodController');
    Route::resource('inventory', 'InventoryController');
    Route::resource('cake', 'CakeController');

    Route::resource('sweet', 'SweetController');
});

