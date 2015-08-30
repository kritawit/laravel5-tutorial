<?php

// Route::get('test-route',function(){
// 	return View::make('test');
// });

// Route::get('test-view','TestController@getIndex');

// Route::get('check-connect',function(){
// 	if (DB::connection()->getDatabaseName()) {
// 		return "Yes ! successfully connected to the DB: ".DB::connection()->getDatabaseName();
// 	}else{
// 		return "Connection False !!";
// 	}
// });

// Route::get('check-model','ProfileController@getIndex');

Route::get('/', 'HomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController', ]);

Route::controller('admin/login', 'Admins\LoginController');


Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admins'], function () {
    Route::get('index', function () {
        return 'Login Success!!';
    });
});