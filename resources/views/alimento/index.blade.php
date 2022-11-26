@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Alimentos</h1>
@stop

@section('content')

<a href="alimentos/create" class="btn btn-primary mb-3">CREAR</a>


<table id="alimentos" class="table table-dark table-striped mt-4">
  <thead>
      <tr>
      <th scope="col">ID</th>
      <th scope="col">CodAl</th>
      <th scope="col">Nombre</th>
      <th scope="col">Vitamina</th>
      <th scope="col">Caloria</th>
      <th scope="col">Grasa</th>
      <th scope="col">Acciones</th>
</tr>
   </thead>
   <tbody>
   @foreach ($alimentos as $alimento)
   <tr>
    <td>{{ $alimento->id}}</td>
    <td>{{ $alimento->CodAl}}</td>
    <td>{{ $alimento->Nombre}}</td>
    <td>{{ $alimento->Vitamina}}</td>
    <td>{{ $alimento->Caloria}}</td>
    <td>{{ $alimento->Grasa}}</td>
    <td>
        <form action="{{ route ('alimentos.destroy',$alimento->id)}}" method="POST">
        @can('alimento.edit')
        <a href="/alimentos/{{ $alimento->id}}/edit" class="btn btn-info">Editar</a>
        @endcan
        @can('alimento.destroy')
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Borrar</button>
        @endcan
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    @stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
 
<script>
   $(document).ready(function () {
    $('#alimentos').DataTable({
      "lengthMenu": [[5,10,50,-1],[5, 10, 50, "All"]]
    });
});
   </script>

@stop