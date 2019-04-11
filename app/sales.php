<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $table = "sales";
    public $primarykey ="id";
    public $timestamps = true;
}
