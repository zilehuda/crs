<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\Owner;
use Illuminate\Support\Facades\Hash;
use Session;
class RegisterController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }


    public function RegisterClient(Request $req)
    {
       client::create([
          'fname' => $req->fname,
          'email' => $req->email,
          'password' =>  Hash::make($req->pwd),
          'nic' => $req->nic,
          'phone' => $req->phone,
          'city' => $req->city,
          'gender' => $req->gender
      ]);
      Session::flash('success', "Successfully Registered! login to continue");
      return view('buyer.login');
    }
    public function RegisterOwner(Request $req)
    {
      create([
          'fname' => $req->fname,
          'email' => $req->email,
          'password' =>  Hash::make($req->pwd),
          'nic' => $req->nic,
          'phone' => $req->phone,
          'city' => $req->city,
          'gender' => $req->gender
      ]);
      Session::flash('success', "Successfully Registered! login to continue");
      return redirect()->intended(route('owner.login'));
    }
}
