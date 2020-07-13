<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
Route::get('/projects','ProjectsCotroller@index');
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','mycontroller@home');
Route::get('/booking','mycontroller@booking');
Route::get('/projects','ProjectsController@index');
Route::post('/projects','ProjectsController@data');
Route::get('/projects/create','ProjectsController@create');
Route::get('/login','Signup@login');

Route::resource('information','Signup');

Route::resource('cars','Car');

Route::resource('showcar','Carshow');

Route::get('/cars/{car}/shows','Car@shows');
Route::get('googlemap', 'mycontroller@map');
Route::get('googlemap/direction', 'mycontroller@direction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');


Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');

Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');