@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
<form action="/users/{{$user->id}}" method="POST">
@csrf    
@method('PUT')
<div class="mb-3">
 <label for="" class="form-label">Nombres</label>
 <input id="name" name="name" type="text" class="form-control"  value="{{$user->name}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Correos</label>
 <input id="email" name="email" type="text" class="form-control"  value="{{$user->email}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Contraseña</label>
 <input id="password" name="password" type="text" class="form-control"  value="{{$user->password}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Edad</label>
 <input id="edad" name="edad" type="text" class="form-control"  value="{{$user->edad}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Peso</label>
 <input id="peso" name="peso" type="text" class="form-control"  value="{{$user->peso}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Talla</label>
 <input id="talla" name="talla" type="text" class="form-control"  value="{{$user->talla}}">
</div>
<a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop