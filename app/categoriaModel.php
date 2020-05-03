<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "categoria";
    protected $primaryKey = "cat_id";
    public $timestamps = false;
}
