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
Route::get('/create','CustomerController@create');

Route::post('/user/store','CustomerController@store');

Route::get('/user','CustomerController@index');

Route::get('/user/{id}','CustomerController@show');

Route::get('/admin','CustomerController@admin');

Route::DELETE('/user/delete/{id}','CustomerController@delete');

Route::get('/user/edit/{id}','CustomerController@edit');

Route::PUT('/admin/update/{id}','CustomerController@update');





