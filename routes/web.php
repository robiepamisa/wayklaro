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

Route::get('/test',function()
{
	return view('test');
});

Auth::routes();
	Route::get('/ticket/{ticketId}','HomeController@ticket')->middleware('auth');
	Route::get('/ticketSubmit','TicketController@submitComment')->middleware('auth');
	Route::POST('/submit', 'TicketController@statusSubmit')->middleware('auth');
	Route::get('profile/{profileId}','HomeController@profileViewer')->middleware('auth');
	Route::get('/category','TicketController@categories')->middleware('auth');

Route::group(['prefix' => 'admin','middleware' => ['adminrole']], function(){

			Route::get('/', 'HomeController@index')->name('dashboard');
			Route::post('/', 'HomeController@store');
			Route::resource('manage_users', 'Manage_usersController');
			Route::POST('/saving-credentials','HomeController@updateCreds');
			Route::get('/allEmployee','HomeController@viewEmployee');
			Route::get('/submit-status','HomeController@userStatus');
});

Route::group(['prefix' => 'employee','middleware' => ['employeerole']], function(){

			Route::get('/', 'EmployeeController@index')->name('employee');
			Route::get('/search','EmployeeController@search');
			
});

Route::group(['prefix' => 'user','middleware' => ['userrole']], function(){

			Route::get('/', 'UserController@index')->name('user');
			Route::post('/ticket-submit','TicketController@index');
			Route::get('/view-ticket','UserController@viewTicket');
			
			

});






