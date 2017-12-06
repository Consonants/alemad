<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    protected $table = 'car_model';
    protected $primarykey = 'id';
    public $timestamps = false;
}
