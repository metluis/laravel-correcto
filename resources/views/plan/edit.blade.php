@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Plan</h1>
@stop
@section('content')
<form action="/plans/{{$plan->id}}" method="POST">
@csrf    
@method('PUT')

<div class="mb-3">
 <label for="" class="form-label">Codigo</label>
 <input id="codigo" name="codigo" type="text" class="form-control" tabindex="2" value="{{$plan->codigo}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Nombre Alumno</label>
 <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" value="{{$plan->nombre}}"> 
</div>
<div class="mb-3">
 <label for="" class="form-label">Descripcion</label>
 <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4" value="{{$plan->descripcion}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Alimentos</label>
 <input id="alimentos" name="alimentos" type="text" class="form-control" tabindex="5" value="{{$plan->alimentos}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Fecha</label>
 <input id="fecha" name="fecha" type="date" class="form-control" tabindex="6" value="{{$plan->fecha}}">
</div>
<a href="/plans" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop