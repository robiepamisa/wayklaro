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
    return view('login');
});

Auth::routes();

Route::group(['middleware' => ['auth','admin']],function(){

    Route::get('/admin', 'AdminController@index')->name('dashboard');
    Route::get('/create_user', 'AdminController@create_user')->name('create_user');
    
});


Route::POST('/login', 'LoginController@login');
Route::get("/login","LoginController@showLoginForm");

Route::POST('/register', 'LoginController@register');
Route::get("/register","LoginController@showRegisterForm");

// Route::group(['middleware' => ['auth','user']],function(){

Route::get('/user','UserController@index')->name('user');
Route::get('/user/view_tickets','UserController@view_tickets')->name('view_tickets');

// });
