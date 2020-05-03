<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagensprodModel extends Model
{
    protected $table = "imagens";
    protected $primaryKey = "imgprod_id";
    public $timestamps = false;
}
