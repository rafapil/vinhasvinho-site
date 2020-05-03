<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagensprod extends Model
{
    //
    protected $table = "imagensprod";
    protected $primaryKey = "imgprod_id";
    public $timestamps = false;
    public $guarded = [];
}
