<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class OwnerController extends Controller
{
  public function __construct()
{

    $this->middleware('auth:owner');
}

function index()
{
    return redirect()->intended(route('owner.my-car'));
  return view('home');
}
public function MyCar()
{

  $cb = DB::table('cars')
        ->where('cars.seller_id','=',Auth::user()->seller_id)
        ->select('cars.*')
        ->get();
  return view('owner.my-cars')->with('cb',$cb);
}

public function ClientStatus()
{

  $cb = DB::table('cars')
        ->where('cars.seller_id','=',Auth::user()->seller_id)
        ->join('car_bookin', 'car_bookin.car_id', '=', 'cars.car_id')
        ->join('client','car_bookin.client_id','=','client.id')
        ->select('cars.*','car_bookin.*','client.fname')
        ->get();
  return view('owner.status')->with('cb',$cb);
}


public function FormSubmit(test $request)
{

  dd($request->field_);

}
}
