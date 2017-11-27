<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Redirect;

class OwnerLoginController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest:owner');
  }

  public function showLoginForm()
  {
    if(Auth::guest()) {
      return view('owner.login');
      }
      else {
      return redirect('/');
  }
  }

  public function login(Request $request)
  {
    //return $request->email;


    if(Auth::guard('owner')->attempt(['email'=>'zilehuda@gmail.com','password'=>'123456']))
    {
      return redirect()->intended(route('owner.dashboard'));
    }
    return redirect()->back()->withInput($request->only('email','remember'));

  }
}
