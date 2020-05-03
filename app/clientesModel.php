<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientesModel extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "cli_id";
    public $timestamps = false;
}
