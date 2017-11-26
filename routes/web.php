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
<<<<<<< HEAD
})->name('home');
Route::get('dummy',function(){
    echo session('company');
    
})->name('dummy');
Route::get('submit',function(){
    echo session('company');
    
})->name('submit1');
=======
});
>>>>>>> 6372cf73886d8db6b6ae6b76ec2030ce5b6345e7

Route::group(["prefix"=>"client"],function(){
  Route::post('login', 'Auth\ClientLoginController@login')->name('client.login.submit');
  Route::get('login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
  Route::get('status', function(){
    return view('status');
  })->name('client.login');
  Route::get('/', 'ClientController@index')->name('client.dashboard');
});

Route::group(["prefix"=>"owner"],function(){

  Route::post('login', 'Auth\OwnerLoginController@login')->name('owner.login.submit');
  Route::get('login', 'Auth\OwnerLoginController@showLoginForm')->name('owner.login');
  Route::get('/', 'OwnerController@index')->name('owner.dashboard');
});

Route::get('logout', 'Controller@logout')->name('logout');
Route::get('available-cars', 'CarsController@GetCarList');
Route::get('single-car/{id}', 'CarsController@GetSingleCar')->name('single.car');
Route::post('client-register',"RegisterController@RegisterClient")->name("client-register");
//Route::post('/log','Controller@login');

Route::get('submit1',function(){
    return view('owner.submit1');
});

<<<<<<< HEAD
Route::post('submit1','CarSubmitController@submit1')->name('submit1.submit');
Route::post('submit2','CarSubmitController@submit2')->name('submit2.submit');
Route::post('submit3','CarSubmitController@submit3')->name('submit3.submit');
Route::get('register', function () {
=======


Route::get('register',function () {
>>>>>>> 6372cf73886d8db6b6ae6b76ec2030ce5b6345e7
    return view('buyer.register');
});
Route::get('listing', function () {
    return view('base');
});
