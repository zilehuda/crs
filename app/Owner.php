<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Owner extends Authenticatable
{
    use Notifiable;

    protected $gaurd = 'owner';
      protected $table = 'seller';
      public $timestamps = false;
      protected $fillable = ['fname','email','password','phone','city','gender','nic'];

}
