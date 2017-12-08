<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Owner extends Authenticatable
{
    use Notifiable;

      protected $guard = 'owner';
      protected $table = 'seller';
      protected $primaryKey = 'seller_id';
      public $timestamps = false;
      protected $fillable = ['fname','email','password','phone','city','gender','nic'];

}
