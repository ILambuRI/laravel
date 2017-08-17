<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() { return Redirect::to('home'); });

Route::get('/index', 'IndexController@showIndex');
Route::post('/make-url', 'IndexController@postUrl');
Route::get('/index/{id}', 'IndexController@getRedirect');

Route::get('/home', 'HomeController@showHome');
Route::get('/about', 'HomeController@showAbout');
Route::get('/thank/{name?}', 'HomeController@showThank');

Route::get('/contact', 'HomeController@showContact');
Route::post('/contact', 'HomeController@postContact');

Route::get('/articles', 'HomeController@showArticles');
Route::get('/article/{num?}', 'HomeController@showArticle');

Route::get('/artists', 'ChinookController@showArtists');
Route::get('/artist/{id?}', 'ChinookController@showArtist');
Route::get('/album/{id?}', 'ChinookController@showAlbum');
Route::get('/track/{id?}', 'ChinookController@showTrack');
