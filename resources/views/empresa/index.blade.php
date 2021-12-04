@extends('layouts.plantillabase');
@section('contenido')


<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="empresas/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Id Empresa</th>
      <th scope="col">razonsocial</th>
      <th scope="col">nit</th>
      <th scope="col">telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($empresa as $empresa)
    <tr>
        <td>{{$empresa->id}}</td>
        <td>{{$empresa->razonsocial}}</td>
        <td>{{$empresa->nit}}</td>
        <td>{{$empresa->telefono}}</td>
        <td>
         <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
          <a href="/empresas/{{$empresa->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">BORRAR</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection