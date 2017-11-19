<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class client extends Authenticatable
{
    //
    public $fillable = ['fname','email','pwd','phone','city','gender','nic'];
    protected $table = 'client';
    protected $guard = "client";
    public $timestamps = false;
}
