<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;
use DB;
class CarsController extends Controller
{

    public function GetCarList()
    {
      $cars = car::where('status','available')->paginate('4');
      return view('listing')->with('cars',$cars);
      # code...
    }
    public function GetCarListtwo()
    {
      $cars = car::paginate('6');
      return view('list-two')->with('cars',$cars);
      # code...
    }
    public function GetSingleCar($id)
    {

      $car = car::find($id);
      //echo $car->car_name;
      session(['car_id' => $id]);
      return view('single-car')->with('car',$car);
    }
}
