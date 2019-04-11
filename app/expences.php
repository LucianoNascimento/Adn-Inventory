<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expences extends Model
{
    protected $table = "expences";
    public $primarykey ="id";
    public $timestamps = true;
}
