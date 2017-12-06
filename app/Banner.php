<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banners';
    protected $primarykey = 'id';
    public $timestamps = false;
}
