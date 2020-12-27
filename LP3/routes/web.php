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

Route::get('/home','UserController@index');
Route::get('/form','UserController@create');
Route::post('/form','UserController@store');
Route::get('/profile/{id}','UserController@create1');
Route::get('/dashboard','UserController@create2');
Route::get('/dashboard/delete/{id}','UserController@destroy');
Route::get('/dashboard/edit/{id}','UserController@create3');
Route::post('/dashboard/edit/{id}','UserController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

