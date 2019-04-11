<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_invoices extends Model
{
    protected $table = "sales_invoices";
    public $primarykey = "id";
    public $timestamps = true;
}
