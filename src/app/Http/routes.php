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

Route::get('/{section?}', array( function ($section = 'presentacion') { 
	if( View::exists('layouts.'.$section) ){
		return View::make('layouts.'.$section, array('section' => $section) );
	} else {
 		 return View::make('layouts.presentacion', array('section' => 'presentacion') );
	}
}));


Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);