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
//Route::post('reloadbalance','DetailsController@reloadbalance');
Route::get('home', 'DetailsController@index');
Route::post('home', 'DetailsController@createDetail');
Route::get('register', 'UserController@register');

Route::get('terms', 'UserController@terms')->name('terms');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');
