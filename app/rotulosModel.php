<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rotulosModel extends Model
{
    protected $table = "rotulos";
    protected $primaryKey = "rot_id";
    public $timestamps = false;
}
