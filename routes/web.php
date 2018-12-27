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

Route::get('/login', function(){
		return view('login/login');
	});
//Route::post('/login', array('uses' => 'LoggingController@doLogin'));
Route::post('/login', 'LoggingController@doLogin');

Route::get('/logowanie', function(){
    return view('login/login');
});

Route::resource('/user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
