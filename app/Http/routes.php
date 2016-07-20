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

Route::get('/setting', function () {
    return view('setting');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/index', function () {
    return view('index');
});
