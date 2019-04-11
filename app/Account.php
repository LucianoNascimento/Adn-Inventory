<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "Account";
    public $primarykey ="id";
    public $timestamps = true;
}
