<?php


namespace App\Modelos;

use Carbon\Carbon;
use App\historialCompras;
use App\ofertas as ofertaDB;
use Illuminate\Support\Facades\Auth;

class ofertas
{


    public function crearOferta($oferta)
    {
        $data = ofertaDB::create([
            'idvendedor' => Auth::user()->id,
            'cantidad' => $oferta['cantidad'],
            'idproducto' => $oferta['idproducto'],
            'valor' => $oferta['valor']
        ]);
        return $data->id;
    }


    public function listarOfertasUsuario()
    {
        return Herramientas::collectionToArray(ofertaDB::where('idvendedor', Auth::user()->id)->with('productos')->get());
    }

    public function listarOfertas()
    {
        return Herramientas::collectionToArray(ofertaDB::where('estado', 1)->with('productos')->get());
    }

    public function listarOfertasDetalladas()
    {
        return Herramientas::collectionToArray(ofertaDB::where('estado', 1)->with('productos')->with('ofertante')->get());

    }

    public function aplicarOfertas()
    {

    }

    public function buscarOfertaDetallada($id)
    {
        $oferta = Herramientas::collectionToArray(ofertaDB::where(['id' => $id, 'estado' => 1])->with('productos')->with('ofertante')->get());

        if (count($oferta) > 0) {
            return $oferta[0];
        } else {
            return abort(404, "Oferta no encontrada");
        }

    }


    public function buscarOferta($id)
    {
        return Herramientas::collectionToArray(ofertaDB::where('id', $id)->get());
    }

    public function actualizarOferta($id, $oferta)
    {

        $id = ofertaDB::where('id', $id)->update([
            'cantidad' => $oferta['cantidad'],
            'idproducto' => $oferta['idproducto'],
            'valor' => $oferta['valor'],
            'estado' => $oferta['estado']
        ]);

        return true;
    }

    public function eliminarOferta($id)
    {
        return ofertaDB::where('id', $id)->delete();
    }

    public function AgregarHistorial($data)
    {
        $fecha = Carbon::now();
        historialCompras::create([
            'idusuario' => $data['idusuario'],
            'idofertas' => $data['idofertas'],
            'fecha' => $fecha->toDateString()
        ]);
        return true;
    }
}
