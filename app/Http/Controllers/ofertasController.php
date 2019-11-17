<?php

namespace App\Http\Controllers;

use App\Modelos\productos;
use Illuminate\Http\Request;
use App\Modelos\ofertas;

class ofertasController extends Controller
{
    public $manager;

    public function __construct()
    {
        $this->manager = new ofertas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
            ->with('ofertas', $this->manager->listarOfertasUsuario());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('sistema.oferta.crear')
            ->with('productos', productos::listarProductos());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $this->manager->crearOferta($request->all());
        return redirect()->route('ofertas.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('sistema.oferta.ver')
            ->with('productos', productos::listarProductos())
            ->with('oferta', $this->manager->buscarOferta($id)[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->manager->actualizarOferta($id, $request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
