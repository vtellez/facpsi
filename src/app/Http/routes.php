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

//Landing
Route::get('landing/{section?}', array(function($section = 'home'){
  if($section == 'join' && Auth::check()) {
    return Redirect::to('/');
  } else {
    return View::make('land.base', array('section' => $section, 'lang' => Cookie::get('language')));
  }
}));


Route::get('/', array( function () { 
  return View::make('layouts.base');
}));



// Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);