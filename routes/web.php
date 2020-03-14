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

Route::get('/','HomeController@home');


Route::get('/test',function()
{
	return view('test');
});

Auth::routes();
Route::POST('/addToCart','CartController@addToCartPost')->middleware('auth');
Route::get('/addToCart','CartController@addToCart')->middleware('auth');
Route::get('/viewCart','CartController@viewCartPage')->middleware('auth');
Route::get('/about','HomeController@viewAbout')->middleware('auth');
Route::POST('/update-cart','UserController@updateCart')->middleware('auth');


Route::group(['prefix' => 'admin','middleware' => ['adminrole']], function(){

			Route::get('/', 'HomeController@index')->name('dashboard');
			Route::get('/product','HomeController@viewProduct');
			Route::get('/add-product','CartController@addProduct');
			Route::post('/upload','CartController@uploadProduct');
			Route::get('/accounts','CartController@accounts');
			Route::post('/update','UserController@statusUpdate');
			Route::post('/delete','UserController@deleteUser');
			Route::post('/addCategory','UserController@AddCategory');
			Route::post('/delete-product','CartController@productDelete');
			Route::get('/add-account', 'UserController@addAccount');
			Route::get('/edit-product/{productID}','CartController@editProduct');
			Route::post('/save-edit-product','CartController@saveProduct');
			Route::post('/saving-account','UserController@addAccountSave');
			Route::get('/edit-account/{userID}','UserController@editUser');
			Route::get('/categories','UserController@viewCategories');
			Route::get('/logs','UserController@showLogs');
			Route::POST('/search-logs','UserController@searchLogs');
			Route::POST('/saving-edit-account/{userID}','UserController@saveEditAccount');
		





});

Route::group(['prefix' => 'user','middleware' => ['userrole']], function(){
			Route::get('/', 'UserController@index')->name('user');
});






