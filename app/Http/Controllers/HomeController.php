<?php

namespace App\Http\Controllers;

use App\Modelos\ofertas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $ofertas;

    public function __construct()
    {
        $this->ofertas = new ofertas();
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome')
            ->with('ofertas', $this->ofertas->listarOfertas());
    }

    public function verOferta($id)
    {
        return view('verOfertas')
            ->with('ofertas', $this->ofertas->buscarOfertaDetallada($id));
    }

    public function generarPago($id)
    {
        return view('generarPAgos')
            ->with('ofertas', $this->ofertas->buscarOfertaDetallada($id));
    }

    public function aplicarOferta(Request $request)
    {
        $this->ofertas->AgregarHistorial($request->all());
        return true;
    }
}
