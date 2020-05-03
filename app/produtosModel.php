<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtosModel extends Model
{
    protected $table = "filtroProdutos";
    protected $primaryKey = "prod_id";
    public $timestamps = false;
}
