<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Redirect;
use Session;

class ClientLoginController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest:client');
  }

  public function showLoginForm()
  {
    if(Auth::guest()) {
      return view('buyer.login');
      }
      else {
      return redirect('/');
  }

}

  public function login(Request $request)
  {


    if(Auth::guard('client')->attempt(['email'=>$request->email,'password'=>$request->password]))
    {
      echo "string";
      return redirect()->intended(route('client.dashboard'));
    }
    Session::flash('message', "Wrong email or password");
    return redirect()->back()->withInput($request->only('email','remember'));

  }
}
