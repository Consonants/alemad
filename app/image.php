<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'images';
    protected $primarykey = 'id';
    public $timestamps = false;
}
