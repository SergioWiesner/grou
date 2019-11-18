<?php


namespace App\Modelos;

use App\historialCompras as historialComprasDB;
use Illuminate\Support\Facades\Auth;

class historialCompras
{

    public function listarHistorialCompra()
    {
        return Herramientas::collectionToArray(historialComprasDB::where('idusuario', Auth::user()->id)->with('usuarios')->with('ofertas.productos')->get());
    }
}
