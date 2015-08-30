<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('test-route',function(){
	return View::make('test');
});

Route::get('test-view','TestController@getIndex');


Route::get('check-connect',function(){
	if (DB::connection()->getDatabaseName()) {
		return "Yes ! successfully connected to the DB: ".DB::connection()->getDatabaseName();
	}else{
		return "Connection False !!";
	}
});

Route::get('check-model','ProfileController@getIndex');

Route::get('/', 'MainController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
