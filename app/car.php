<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    //
    protected $table = 'cars';
    protected $primaryKey = 'car_id';
    public $timestamps = false;
}
