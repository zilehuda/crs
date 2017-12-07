<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
class AdminLoginController extends Controller
{
public function __construct()
{
    $this->middleware('guest:admin');
}

public function showLoginForm()
{
  if(Auth::guest()) {
    return view('admin.login');
    }
    else {
    return redirect('/');
}

}

public function login(Request $request)
{

  if(Auth::guard('admin')->attempt(['email'=>"admin",'password'=>"admin"]))
  {
    return "string";
    //return redirect()->intended(route('client.dashboard'));
  }
  Session::flash('message', "Wrong email or password");
  return redirect()->back()->withInput($request->only('email','remember'));

}
}
