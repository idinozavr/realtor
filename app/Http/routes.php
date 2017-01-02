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


Route::group(['middleware' => 'guest'], function (){

    // Маршруты аутентификации...
    Route::post('auth/login', 'AuthController@postLogin');

    // Маршруты регистрации...
    Route::post('auth/register', 'RegisterController@register');
    Route::get('register/confirm/{token}', 'RegisterController@confirm');
    Route::get('/repeat_confirm','RegisterController@getRepeat');
    Route::post('/repeat_confirm','RegisterController@postRepeat');

    // Маршруты запроса ссылки для сброса пароля...
    Route::get('password', 'PasswordController@index');
    Route::post('password', 'PasswordController@postEmail');

    // Маршруты сброса пароля...
    Route::get('password_reset/{token}', 'PasswordController@getReset');
    Route::post('password_reset', 'PasswordController@postReset');
});

get('/', ['as'=>'main', 'uses'=>'MainController@index']);

// Аутентификация и Выход
get('/auth', ['as'=>'auth', 'middleware' => 'guest', 'uses'=>'AuthController@index']);
get('/auth/logout', ['as'=>'logout','middleware' => 'auth', 'uses' => 'AuthController@getLogout']);

// Разделы
get('/news', ['as'=>'news', 'uses'=>'NewsController@index']);
get('/profile', ['as'=>'profile', 'middleware' => 'auth', 'uses'=>'ProfileController@index']);
