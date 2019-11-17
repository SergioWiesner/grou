@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear oferta</h1>
        <form action="{{route('ofertas.update', $oferta['id'])}}" method="post">
            @csrf
            @method('patch')
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputState">Producto</label>
                    <select id="inputState" name="idproducto" class="form-control">
                        <option selected></option>
                        @if(count($productos) > 0)
                            @for($a = 0; $a < count($productos); $a++)
                                @if($oferta['idproducto'] == $productos[$a]['id'])
                                    <option value="{{$productos[$a]['id']}}"
                                            selected>{{$productos[$a]['nombre']}}</option>
                                @else
                                    <option value="{{$productos[$a]['id']}}">{{$productos[$a]['nombre']}}</option>
                                @endif
                            @endfor
                        @endif
                    </select>
                    <a href="{{route('productos.create')}}">crear producto</a>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCity">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" value="{{$oferta['cantidad']}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Valor</label>
                    <input type="text" class="form-control" name="valor" value="{{$oferta['valor']}}">
                </div>

                @if($oferta['estado'] == 1)
                    <div class="form-group col-md-2">
                        <label for="inputZip">Estado</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="1" checked>
                            <label class="form-check-label" for="estado">
                                Activado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="0">
                            <label class="form-check-label" for="estado">
                                Desactivado
                            </label>
                        </div>
                    </div>
                @else
                    <div class="form-group col-md-2">
                        <label for="inputZip">Estado</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="1">
                            <label class="form-check-label" for="estado">
                                Activado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="0" checked>
                            <label class="form-check-label" for="estado">
                                Desactivado
                            </label>
                        </div>
                    </div>
                @endif
            </div>
            <input type="submit" class="btn btn-primary" value="Crear oferta">
        </form>
    </div>
@endsection
