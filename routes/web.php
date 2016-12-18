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

// Admin route

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

// Authentication Routes...

Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout');

// Home page route

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Privacy

Route::get('privacy', 'PagesController@privacy');

// Registration Routes...

Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

// Social routes

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


// Terms of Service

Route::get('terms-of-service', 'PagesController@terms');

//Test route

Route::get('test',  ['middleware' => 'auth', 'uses' => 'TestController@index']);

// Widget routes

Route::get('widget/create', ['as' => 'widget.create', 'uses' => 'WidgetController@create']);

Route::get( 'widget/{id}-{slug?}', ['as' => 'widget.show', 'uses' => 'WidgetController@show']);

Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);


