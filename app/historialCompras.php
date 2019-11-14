<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class historialCompras extends Model
{
    use SoftDeletes;
    protected $table = "historial_compra";
    protected $fillable = ['id', 'idusuario', 'idofertas', 'fecha'];
}
