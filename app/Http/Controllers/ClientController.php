<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function __construct($value='')
    {
      # code...
      $this->middleware("auth");
    }
}
