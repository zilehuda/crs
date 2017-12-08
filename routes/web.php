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

Route::get('/','Controller@Redirect')->name('home');
Route::get('dummy',function(){
    echo session('company');

})->name('dummy');
Route::get('list-two','CarsController@GetCarListtwo')->name('list.two');
Route::get('submit',function(){
    echo session('company');

})->name('submit1');


Route::group(["prefix"=>"admin"],function(){
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::get('/','AdminController@index');
  Route::get('client-request', 'AdminController@ShowClientRequest')->name('admin.dashboard');
  Route::post('client-request','AdminController@ApproveClientCar')->name('car.approve');
  Route::get('car-request', 'AdminController@ShowCarRequest')->name('car.request');
  Route::post('car-request','AdminController@ApproveCar')->name('car.owner.approve');
  Route::get('hired-cars', 'AdminController@ShowHiredCars')->name('car.hired');
});

Route::group(["prefix"=>"client"],function(){
  Route::post('login', 'Auth\ClientLoginController@login')->name('client.login.submit');
  Route::get('login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
  Route::get('schedule',"ClientController@ClientSchedule")->name('client.schedule');
  Route::get('status','ClientController@ClientStatus')->name('client.status');
  Route::get('/', 'ClientController@index')->name('client.dashboard');
});


Route::group(["prefix"=>"owner"],function(){

  Route::get('my-cars','OwnerController@MyCar')->name('owner.my-car');
  Route::get('status','OwnerController@ClientStatus')->name('owner.status');
  Route::post('login', 'Auth\OwnerLoginController@login')->name('owner.login.submit');
  Route::get('register',function()
  {
    return view('owner.register');
  });
  Route::post('register', 'RegisterController@RegisterOwner')->name('owner.register');
  Route::get('login', 'Auth\OwnerLoginController@showLoginForm')->name('owner.login');
  Route::get('/', 'OwnerController@index')->name('owner.dashboard');
  Route::group(['middleware' => 'auth:owner'],function()
  {
    Route::get('submit1',function(){
        return view('owner.submit1');
    })->name('submit');
    Route::post('submit2','CarSubmitController@submit1')->name('submit1.submit');
    Route::post('submit3','CarSubmitController@submit2')->name('submit2.submit');
    Route::post('submit4','CarSubmitController@submit3')->name('submit3.submit');
  });

});

Route::get('logout', 'Controller@logout')->name('logout');
Route::get('available-cars', 'CarsController@GetCarList')->name('available.cars.1');
Route::get('single-car/{id}', 'CarsController@GetSingleCar')->name('single.car');
Route::post('client-register',"RegisterController@RegisterClient")->name("client-register");
//Route::post('/log','Controller@login');





Route::post('book','ClientController@BookCar')->name('book.submit');
Route::get('register',function () {
    return view('buyer.register');
});
Route::get('listing', function () {
    return view('base');
});
