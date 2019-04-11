<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    protected $table = "suppliers";
    public $primaryKey = "id";
    public $timestamps = true;

}
