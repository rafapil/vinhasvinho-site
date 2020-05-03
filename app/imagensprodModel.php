<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagensProdModel extends Model
{
    public $table = "imagensprod";
    public $primaryKey = "imgprod_id";
    public $timestamps = false;
}
