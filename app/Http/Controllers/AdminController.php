<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use client;
use Owner;
use App\car;
use App\CarBook;
use DB;
class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  function index()
  {
    //return "dd";
    //return redirect('admin.dashboard');
    ///return redirect()->intended(route('admin.dashboard'));
    return redirect()->route('admin.dashboard');
  }
  public function ShowClientRequest()
  {
    $cb = DB::table('car_bookin')
          ->where('car_bookin.status','=','pending')
          ->join('cars', 'car_bookin.car_id', '=', 'cars.car_id')
          ->join('client','car_bookin.client_id','=','client.id')
          ->select('cars.car_name', 'car_bookin.*','client.fname')
          ->get();
    return view('admin.client-request')->with('cb',$cb);
    # code...
  }
  public function ApproveClientCar(Request $req)
  {
    CarBook::where('client_id', $req->client_id)
          ->where('car_id', $req->car_id)
          ->update(['status' => 'approved']);

      return redirect()->route('admin.dashboard');
  }

  public function ShowCarRequest()
  {
    $cars = car::where('status','pending')->get();

    return view('admin.car-request')->with('cb',$cars);
    # code...
  }
  public function ApproveCar(Request $req)
  {

      car::where('car_id', $req->car_id)
        ->update(['status' => 'available']);
        return redirect()->route('car.request');
    # code...
  }
  public function ShowHiredCars()
  {
    $cb = DB::table('car_bookin')
          ->join('cars', 'car_bookin.car_id', '=', 'cars.car_id')
          ->join('client','car_bookin.client_id','=','client.id')
          ->select('cars.*', 'car_bookin.*','client.fname')
          ->get();
    return view('admin.hired-cars')->with('cb',$cb);
    # code...
  }

}
