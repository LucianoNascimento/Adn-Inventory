<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    public $primarykey ="id";
    public $timestamps = true;
}
