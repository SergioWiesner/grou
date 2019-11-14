<?php


namespace App\Modelos;

use App\ofertas as ofertaDB;
use Illuminate\Support\Facades\Auth;

class ofertas
{


    public function crearOferta($oferta)
    {
        $data = ofertaDB::create([
            'idvendedor' => Auth::user()->id,
            'cantidad' => $oferta['idvendedor'],
            'idproducto' => $oferta['idvendedor']
        ]);
        return $data->id;
    }


    public function listarOfertasUsuario()
    {
        dd(ofertaDB::where('idvendedor', Auth::user()->id)->get());
        Herramientas::collectionToArray(ofertaDB::where('idvendedor', Auth::user()->id)->get());
    }

    public function actualizarOferta($id, $oferta)
    {
        ofertaDB::where('id', $id)->update([
            'idvendedor' => Auth::user()->id,
            'cantidad' => $oferta['idvendedor'],
            'idproducto' => $oferta['idvendedor']
        ]);
    }

    public function eliminarOferta($id)
    {
        return ofertaDB::where('id', $id)->delete();
    }
}
