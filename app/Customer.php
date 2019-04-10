<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    public $primarykey ="id";
    public $timestamps = true;
}
