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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::get('/', function(){
	return redirect('back/weapons');
});

Route::group(['prefix' => 'back'], function()
{
	Route::get('/', function(){
		return redirect('weapons');
	});
	Route::get('groups', ['uses' => 'AdminController@showGroups']);
	Route::get('weapons', ['uses' => 'AdminController@showWeapons']);
	Route::get('notifications', ['uses' => 'AdminController@showAllNotifications']);
	Route::get('notifications/{weapon_id}', ['uses' => 'AdminController@showNotifications']);
});

Route::get('back', 'AdminController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    'back' => 'AdminController',
]);

