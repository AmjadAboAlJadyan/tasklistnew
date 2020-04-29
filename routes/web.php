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

Route::get('/', 'HomeController@index');

Route::post('store','HomeController@store');

Route::delete('delete/{id}','HomeController@destory');

Route::post('edit/{id}','HomeController@edit');

route::post('update/{id}','HomeController@update');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
