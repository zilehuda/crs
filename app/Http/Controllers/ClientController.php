<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:client');
  }

  function index()
  {


    return view('home');
  }
  public function FormSubmit(test $request)
  {

    dd($request->field_);

 }
}
