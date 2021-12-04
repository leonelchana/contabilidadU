@extends('layouts.plantillabase');
@section('contenido')

<h2>EDITAR REGISTROS</h2>

<form action="/empresas/{{$empresa->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">RAZON SOCIAL</label>
    <input id="razonsocial" name="razonsocial" type="text" class="form-control" value="{{$empresa->codigo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NIT</label>
    <input id="nit" name="nit" type="text" class="form-control" value="{{$empresa->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$empresa->cantidad}}">
  </div>
  <a href="/empresas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection