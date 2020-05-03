<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagProdutoModel extends Model
{
    protected $table = "pag_produto";
    protected $primaryKey = "prod_id";
    public $timestamps = false;
}
