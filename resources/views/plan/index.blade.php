@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Listado de Planes</h1>
@stop
@section('content')

<a href="plans/create" class="btn btn-primary">CREAR</a>

<table id="plans" class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">NOMBRE ALUMNO</th>
            <th scope="col">DESCRIPCION PLAN</th>
            <th scope="col">ALIMENTOS</th>
            <th scope="col">FECHA</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($plans as $plan)
        <tr>
            <td>{{ $plan->id}}</td>
            <td>{{ $plan->codigo}}</td>
            <td>{{ $plan->nombre}}</td>
            <td>{{ $plan->descripcion}}</td>
            <td>{{ $plan->alimentos}}</td>
            <td>{{ $plan->fecha}}</td>
            <td>
                <form action="{{ route ('plans.destroy',$plan->id)}}" method="POST">
                
                <a href="/plans/{{ $plan->id}}/edit" class="btn btn-info">Editar</a>
                
                
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
    $('#plans').DataTable({
      "lengthMenu": [[5,10,50,-1],[5, 10, 50, "All"]]
    });
});
   </script>

@stop