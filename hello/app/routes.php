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

Route::get('/', function()
{
    return 'Hello World!';
});

Route::get('/hello/{name?}', 'HelloController@showIndex');
Route::get('/form/{val?}', 'HelloController@showForm');
Route::post('/form/{val?}', 'HelloController@postForm');
Route::get('/blade/', 'HelloController@showBlade');

