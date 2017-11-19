<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::post('client-register',"RegisterController@RegisterClient")->name("client-register");
Route::post('/log','Controller@login');
Route::get('/log','Controller@login');

Route::get('home', function () {
    return view('base');
});

Route::get('buyer-login', function () {
    return view('buyer.login');
});

Route::get('register', function () {
    return view('buyer.register');
});
Route::get('listing', function () {
    return view('base');
});
