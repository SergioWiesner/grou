<?php
namespace App\Modelos;
use App\productos as productosBD;

class productos
{

    public function crearProducto($producto)
    {
        $data = productosBD::create([
            'nombre' => $producto['nombre'],
            'descripcion' => $producto['descripcion']
        ]);

        return $data->id;
    }

    public static  function listarProductos()
    {
        return Herramientas::collectionToArray(productosBD::all());
    }

    public function actualizarProducto($id, $producto)
    {
        productosBD::where('id', $id)->update([
            'nombre' => $producto['nombre'],
            'descripcion' => $producto['descripcion']
        ]);
    }

    public function eliminarOferta($id)
    {
        return productosBD::where('id', $id)->delete();
    }

}
