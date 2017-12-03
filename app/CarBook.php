<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBook extends Model
{
    //
    protected $table = 'car_bookin';
    public $fillable = ['client_id','car_id','status','payment','hire_date','end_date'];
      public $timestamps = false;
}
