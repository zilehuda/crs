<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarBook;
use App\car;
use Auth;
use DB;
class ClientController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:client');
  }

  function index()
  {


    return view('home');
  }
  public function BookCar()
  {
    $client_id = Auth::user()->id;
    $car_id = session('car_id');
    return CarBook::create([
        'client_id' => $client_id,
        'car_id' => $car_id ,
        'status' =>  'pending',
        'payment' => 'not'
    ]);
    return redirect()->intended(route('client.status'));
  }

    public function ClientStatus()
    {
      $cb = DB::table('car_bookin')
            ->where('car_bookin.client_id','=',Auth::user()->id)
            ->join('cars', 'car_bookin.car_id', '=', 'cars.car_id')
            ->select('cars.car_name', 'car_bookin.status')
            ->get();
      return view('status')->with('cb',$cb);
    }

    //$cb = CarBook::all();
    //dd($cb);
  public function FormSubmit(test $request)
  {

    dd($request->field_);

 }
}
