@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Alimentos</h1>
@stop

@section('content')
<form action="/alimentos/{{$alimento->id}}" method="POST">
@csrf    
@method('PUT')
<div class="mb-3">
 <label for="" class="form-label">Codigo Alumno</label>
 <input id="CodAl" name="CodAl" type="text" class="form-control" value="{{$alimento->CodAl}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Nombres</label>
 <input id="Nombre" name="Nombre" type="text" class="form-control"  value="{{$alimento->Nombre}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Vitaminas</label>
 <input id="Vitamina" name="Vitamina" type="text" class="form-control"  value="{{$alimento->Vitamina}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Caloria</label>
 <input id="Caloria" name="Caloria" type="text" class="form-control"  value="{{$alimento->Caloria}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Grasa</label>
 <input id="Grasa" name="Grasa" type="text" class="form-control"  value="{{$alimento->Grasa}}">
</div>
<a href="/alimentos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop