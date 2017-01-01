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

// Маршруты аутентификации...
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::post('auth/register', 'RegisterController@register');
Route::get('register/confirm/{token}', 'RegisterController@confirm');
Route::get('/repeat_confirm','RegisterController@getRepeat');
Route::post('/repeat_confirm','RegisterController@postRepeat');

get('/', ['as'=>'main', 'uses'=>'MainController@index']);
get('/auth', ['as'=>'auth', 'uses'=>'AuthController@index']);
get('/news', ['as'=>'news', 'uses'=>'NewsController@index']);
