@extends('adminlte::page')

@section('title', 'Registrar Estudiante')

@section('content_header')
    <h1>Registrar Estudiantes</h1>
@stop

@section('content')
<form action="/users" method="POST">
    @csrf
<div class="mb-3">
 <label for="" class="form-label">Nombre</label>
 <input id="name" name="name" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
 <label for="" class="form-label">Correos</label>
 <input id="email" name="email" type="text" class="form-control" tabindex="3">
</div>
<div class="mb-3">
 <label for="" class="form-label">Contraseña</label>
 <input id="password" name="password" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
 <label for="" class="form-label">Edad</label>
 <input id="edad" name="edad" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
 <label for="" class="form-label">Peso</label>
 <input id="pesp" name="peso" type="text" class="form-control" tabindex="6">
</div>
<div class="mb-3">
 <label for="" class="form-label">Talla</label>
 <input id="talla" name="talla" type="text" class="form-control" tabindex="7">
</div>
<a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css"
@stop

@section('js')
@stop