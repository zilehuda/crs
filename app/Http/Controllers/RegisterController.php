<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }


    public function RegisterClient(Request $req)
    {
      return client::create([
          'fname' => $req->fname,
          'email' => $req->email,
          'password' =>  Hash::make($req->pwd),
          'nic' => $req->nic,
          'phone' => $req->phone,
          'city' => $req->city,
          'gender' => $req->gender
      ]);
    }
}
