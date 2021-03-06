<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ofertas extends Model
{
    use SoftDeletes;
    protected $table = "ofertas";
    protected $fillable = ['id', 'idvendedor', 'cantidad', 'estado', 'idproducto', 'valor'];

    public function productos()
    {
        return $this->belongsTo('App\productos', 'idproducto', 'id');
    }

    public function ofertante()
    {
        return $this->belongsTo('App\User', 'idvendedor', 'id');
    }

    public function historialCompra()
    {
        return $this->hasMany('App\historialCompras', 'idproducto', 'id');
    }
}
