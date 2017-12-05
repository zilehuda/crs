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
  public function BookCar(Request $req)
  {
    $hire_date =  date('Y-m-d', strtotime($req->hire_date));
    $end_date = date('Y-m-d', strtotime($req->end_date));
    $client_id = Auth::user()->id;
    $car_id = session('car_id');
    CarBook::create([
        'client_id' => $client_id,
        'car_id' => $car_id ,
        'status' =>  'pending',
        'payment' => 'not',
        'hire_date'=>$hire_date,
        'end_date'=>$end_date
    ]);
    return redirect()->intended(route('client.status'));
  }

    public function ClientStatus()
    {
    $d =  date('Y-M-D', strtotime($val->regdate));
      $cb = DB::table('car_bookin')
            ->where('car_bookin.client_id','=',Auth::user()->id)
            ->join('cars', 'car_bookin.car_id', '=', 'cars.car_id')
            ->select('cars.car_name', 'car_bookin.status')
            ->get();
      return view('status')->with('cb',$cb);
    }
    public function ClientSchedule()
    {
      $cb = DB::table('car_bookin')
            ->where('car_bookin.client_id','=',Auth::user()->id)
            ->where('car_bookin.status','=','approved')
            ->join('cars', 'car_bookin.car_id', '=', 'cars.car_id')
            ->select('cars.car_name', 'car_bookin.*')
            ->get();
      return view('buyer.schedule')->with('cb',$cb);
    }

    //$cb = CarBook::all();
    //dd($cb);
  public function FormSubmit(test $request)
  {

    dd($request->field_);

 }
}
