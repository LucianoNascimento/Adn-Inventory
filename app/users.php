<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    public $primarykey ="id";
    public $timestamps = true;
}
