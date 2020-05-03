<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegioesModel extends Model
{
    protected $table = "regioes";
    protected $primaryKey = "reg_id";
    public $timestamps = false;
}
