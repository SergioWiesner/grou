<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ofertas extends Model
{
    use SoftDeletes;
    protected $table = "ofertas";
    protected $fillable = ['id', 'idvendedor', 'cantidad', 'idproducto'];
}
