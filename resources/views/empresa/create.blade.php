@extends('layouts.plantillabase');
@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/empresas" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Razon Social</label>
    <input id="razonsocial" name="razonsocial" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NIT</label>
    <input id="nit" name="nit" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">TELEFONO</label>
    <input id="telefono" name="telefono" type="number" class="form-control" tabindex="3">
  </div>
  
  <a href="/empresas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection