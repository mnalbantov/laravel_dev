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
Route::get('/','HomeController@index');
Route::get('/profile/settings','HomeController@settings');
Route::get('/profile/inbox','HomeController@inbox');
Route::get('/profile','HomeController@index');

Route::resource('/articles','ArticleController');
Route::resource('/products','ProductController');
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');
Route::get('auth/logout','Auth\AuthController@getLogout');

Route::get('/admin','Admin\AdminController@index');


