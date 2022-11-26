<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;


use App\Models\Alimento;

class AlimentoController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
    }
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $alimentos = Alimento::all();
        return view('alimento.index')->with('alimentos',$alimentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alimentos = new Alimento();
        $alimentos->CodAl =$request->get('CodAl');
        $alimentos->Nombre =$request->get('Nombre');
        $alimentos->Vitamina =$request->get('Vitamina');
        $alimentos->Caloria =$request->get('Caloria');
        $alimentos->Grasa =$request->get('Grasa');

        $alimentos->save();

        return redirect('/alimentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alimento = Alimento::find($id);
        return view('alimento.edit')->with('alimento',$alimento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alimento= Alimento::find($id);

        
        $alimento->CodAl =$request->get('CodAl');
        $alimento->Nombre =$request->get('Nombre');
        $alimento->Vitamina =$request->get('Vitamina');
        $alimento->Caloria =$request->get('Caloria');
        $alimento->Grasa =$request->get('Grasa');

        $alimento->save();

        return redirect('/alimentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alimento = Alimento::find($id);
        $alimento->delete();
        return redirect('/alimentos');
    }
}
