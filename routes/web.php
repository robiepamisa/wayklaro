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
    return redirect('login');
});

Auth::routes();

Route::get('/ticket/{ticketId}','HomeController@ticket');
Route::get('/ticketSubmit','TicketController@submitComment');
Route::POST('/submit', 'TicketController@statusSubmit')->name('submitStatus');

Route::group(['prefix' => 'admin','middleware' => ['adminrole']], function(){

			Route::get('/', 'HomeController@index')->name('dashboard');
			Route::post('/', 'HomeController@store');
			Route::resource('manage_users', 'Manage_usersController');
			Route::POST('/saving-credentials','HomeController@updateCreds');

});

Route::group(['prefix' => 'employee','middleware' => ['employeerole']], function(){

			Route::get('/', 'EmployeeController@index')->name('employee');
			
});

Route::group(['prefix' => 'user','middleware' => ['userrole']], function(){

			Route::get('/', 'UserController@index')->name('user');
			Route::post('/ticket-submit','TicketController@index');
			Route::get('/view-ticket','UserController@viewTicket');
			
			

});






