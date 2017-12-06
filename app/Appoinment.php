<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    protected $table = 'appoinment';
    protected $primarykey = 'id';
    public $timestamps = false;
}
