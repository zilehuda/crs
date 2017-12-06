<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Redirect;
use Session;
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


    if(Auth::guard('owner')->attempt(['email'=>$request->email,'password'=>$request->password]))
    {
      return redirect()->intended(route('owner.dashboard'));
    }
    Session::flash('success', "Wrong email or password");
    return redirect()->back()->withInput($request->only('email','remember'));

  }
}
