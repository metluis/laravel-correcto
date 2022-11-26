<?php

namespace App\Http\Controllers;
use App\Http\Requests;


use Illuminate\Http\Request;
use App\Models\Imc;

class ImcController extends Controller
{
    
    public function index()
    {
      return view('imc.imc');
    }

    public function store(Request $request)
    {
      $alt = $_POST['Altura'].'<br>';
      $pes = $_POST['Peso'].'<br>';

      $altura = ((int)$alt/100);
      $imc = ((int)$pes/($altura*$altura));


      return redirect('/imcs');
  }
}