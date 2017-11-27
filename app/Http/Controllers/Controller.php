<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Session;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function logout(Request $request) {
      Auth::logout();
      Session::flush();
      return redirect()->intended(route('home'));
    }

    public function Redirect()
    {
      if(Auth::guard('client')->check())
      {
        return redirect()->route('client.dashboard');
      }
      elseif(Auth::guard('owner')->check())
      {
        return redirect()->route('owner.dashboard');
      }
      else {
        return view('home');
      }
    }




}
