@extends('adminlte::page')

@section('title', 'Mantenimiento')

@section('content_header')
    <h1>Listado de uentas</h1>
@stop

@section('content')
@can('users.create')
<a href="users/create" class="btn btn-primary mb-3">CREAR</a>
@endcan

<table id="users" class="table table-dark table-striped mt-4">
  <thead>
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Edad</th>
      <th scope="col">Peso</th>
      <th scope="col">Talla</th>
      <th scope="col">Acciones</th>
</tr>
   </thead>
   <tbody>
   @foreach ($users as $user)
   <tr>
    <td>{{ $user->id}}</td>
    <td>{{ $user->name}}</td>
    <td>{{ $user->email}}</td>
    <td>{{ $user->password}}</td>
    <td>{{ $user->edad}}</td>
    <td>{{ $user->peso}}</td>
    <td>{{ $user->talla}}</td>
    <td>
    
        <form action="{{ route ('users.destroy',$user->id)}}" method="POST">
        <a href="/users/{{ $user->id}}/edit" class="btn btn-info">Editar</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Borrar</button>
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
    $('#users').DataTable({
      "lengthMenu": [[5,10,50,-1],[5, 10, 50, "All"]]
    });
});
   </script>

@stop