<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;
use DB;
class CarsController extends Controller
{

    public function GetCarList()
    {
      $cars = car::all();

      return view('listing')->with('cars',$cars);
      # code...
    }
    public function GetSingleCar($id)
    {

      $car = car::find($id);
      //echo $car->car_name;
      return view('single-car')->with('car',$car);
    }
}
