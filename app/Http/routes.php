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

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/register', function () {
    return view('register');
});


