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

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('dashboard');
Route::get('/create_user', 'AdminController@create_user')->name('create_user');
Route::POST('/loginme', 'UserController@login');
Route::get("/login",function(){
    return view('login');
});