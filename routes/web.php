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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    return view('welcome');
});

//Store routes
Route::get('/store', 'StoreController@index')->name('store')->middleware('verified');
Route::get('/store/{id}', 'StoreController@show')->name('store')->middleware('verified');

//Admin zone
Route::group(['middleware' => ['verified', 'permission:admin']], function () {
    Route::resource('/users', 'UserController'); //Users
    Route::resource('/products', 'ProductController'); //Products
});





