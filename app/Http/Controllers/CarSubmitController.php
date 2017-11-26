<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        return view('owner.Submit2');
    }
    public function submit2(Request $req)
    {
       
        
        
        return view('owner.Submit3');
    }
    public function submit3(Request $req)
    {
       
        session(['hire_cost' => $req->price]);
        session(['milage' => $req->milage]);
        session(['air_bag' => $req->airbags]);
        session(['gps' => $req->gps]);
        session(['reg_no' => $req->plate_no]);
        session(['expiry_month' =>$req-> reg_expm]);
        session(['expiry_year' =>$req-> reg_expy]);
        echo session ('company');
        
    }
}
    
