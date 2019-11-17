@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear oferta</h1>
        <form action="{{route('ofertas.store')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Producto</label>
                    <select id="inputState" class="form-control" name="idproducto">
                        <option selected></option>
                        @if(count($productos) > 0)
                            @for($a = 0; $a < count($productos); $a++)
                                <option value="{{$productos[$a]['id']}}">{{$productos[$a]['nombre']}}</option>
                            @endfor
                        @endif
                    </select>
                    <a href="{{route('productos.create')}}">crear producto</a>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCity">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Valor</label>
                    <input type="text" class="form-control" name="valor" id="inputZip">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Crear oferta">
        </form>
    </div>
@endsection
