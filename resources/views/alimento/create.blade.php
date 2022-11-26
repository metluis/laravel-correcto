@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Recomendar Alimento</h1>
@stop

@section('content')
<form action="/alimentos" method="POST">
    @csrf
<div class="mb-3">
 <label for="" class="form-label">CodAl</label>
 <input id="CodAl" name="CodAl" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
 <label for="" class="form-label">Nombres</label>
 <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="3">
</div>
<div class="mb-3">
 <label for="" class="form-label">Vitaminas</label>
 <input id="Vitamina" name="Vitamina" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
 <label for="" class="form-label">Caloria</label>
 <input id="Caloria" name="Caloria" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
 <label for="" class="form-label">Grasa</label>
 <input id="Grasa" name="Grasa" type="text" class="form-control" tabindex="6">
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