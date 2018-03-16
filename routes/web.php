<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/a', function () {
    return view('layouts.admin');
});

Route::resource('/','GuestController');

Route::get('/detail/{id}', 'GuestController@detail');

Route::resource('rumah','RumahController');
Auth::routes();

Route::get('/tampilann','tampilanController@index');


Route::group(['middleware'=>['auth','role:admin']], function(){
Route::get('/home', 'HomeController@index');
Route::resource('/agen','agenController');
Route::resource('/jenis','jeniscontroller');
Route::resource('/kontak','kontakController');

	});

Route::group(['middleware'=>['auth','role:admin|agen']], function(){
Route::get('/home', 'HomeController@index');
Route::resource('/rumah','rumahController');
	});
Route::get('/perumahan/{perumahan}','HomeController@filter');

Route::get('/contact',function(){
	return view('kontak');
});

Route::get('/status/{id}','rumahController@status');

    Route::get('change', 'AccountController@password')->name('password.change');
    Route::patch('change', 'AccountController@password_update');
