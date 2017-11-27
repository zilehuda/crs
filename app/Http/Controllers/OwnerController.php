<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
  public function __construct()
{
    $this->middleware('auth:owner');
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
