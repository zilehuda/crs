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
    return view('auth.owner-login');
  }

  public function login(Request $request)
  {

    $this->validate($request,
    [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    if(Auth::guard('owner')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
    {
      return "dd";
      return redirect()->intended(route('owner.dashboard'));
    }
    return redirect()->back()->withInput($request->only('email','remember'));

  }
}
