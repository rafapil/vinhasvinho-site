<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoModel extends Model
{
    protected $table = "pedido";
    protected $primaryKey = "ped_id";
    public $timestamps = false;
}
