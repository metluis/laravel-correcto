@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Calcular Indice de Masa Corporal</h1>
@stop

@section('content')
<form action="/imcs" method="POST">
    @csrf
<div class="mb-3">
 <label for="" class="form-label">Ingrese Peso:</label>
 <input id="Peso" name="Peso" type="text" class="form-control" tabindex="2" require>
</div>
<div class="mb-3">
 <label for="" class="form-label">Ingrese altura:</label>
 <input id="Altura" name="Altura" type="text" class="form-control" tabindex="3" require>
</div>
<button type="submit" class="btn btn-primary" tabindex="4">Calcular</button>
</form>
@stop
<p><strong>Tu IMC es:</strong> {{$imc['']}}</p>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop

<?php
if($imc>40) {
    echo "Tu imc es:".$imc." - Problema Obesidad Tipo III";
    return redirect('/imcs');
    } else
  if ($imc>34.99) {
    echo "Tu imc es:".$imc." -Problema Obesidad Tipo II";
    } else
  if ($imc=29.99) {
    echo "Tu imc es:".$imc." -Problema Obesidad Tipo I";
    } else
  if ($imc=24.99) {
    echo "Tu imc es:".$imc." -Problema Sobre Peso";
    } else
  if (Simc>18.49) {
    echo "Tu imc es:".$imc." -Peso Normal";
    } else
  if ($imc>16.99) {
    echo "Tu imc es:".$imc." -Problema Delgadez Aceptable";
    } else
  if ($imc>16.00) {
    echo "Tu imc es:".$imc." -Problema Delgadez Moderada";
    } else 
  if ($imc<16.00) {
      echo "Tu imc es:".$imc." -Delgadez Extrema";
  } else {
      echo '0';
  }

