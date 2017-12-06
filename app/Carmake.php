<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmake extends Model
{
    protected $table = 'car_make';
    protected $primarykey = 'id';
    public $timestamps = false;
}
