<?php

namespace App\Http\Controllers;
use App\car;
use Illuminate\Http\Request;
use Auth;
class CarSubmitController extends Controller
{
    //

    public function submit1(Request $req)
    {
       // echo $req->company;
        session(['company' => $req->company]);
        session(['manu_year' => $req->menu_year]);
        session(['fuel' => $req->fuel]);
        session(['ins_no' => $req->ins_no]);
        session(['car_name' => $req->model]);
        session(['capacity' =>$req-> capacity]);

        return view('owner.submit2');
    }
    public function submit2(Request $req)
    {



        return view('owner.submit3');
    }
    public function submit3(Request $req)
    {

        $car = new car;
        $car->car_name = session('car_name');
        $car->company = session('company');
        $car->fuel_type = session('fuel');
        $car->capacity = session('capacity');
        $car->ins_no = session('ins_no');
        $car->hire_cost = $req->hire_cost;
        $car->mileage = $req->mileage;
        $car->air_bag = $req->air_bag;
        $car->gps = $req->gps;
        $car->reg_no = $req->plate_no;
        $car->expiry_month = $req->reg_expm;
        $car->expiry_year = $req->reg_expy;
        $car->status = 'pending';
        $car->seller_id = Auth::user()->seller_id;
        $car->manu_year = session('manu_year');
        $car->save();
        return redirect()->intended(route('owner.status'));

    }
}
