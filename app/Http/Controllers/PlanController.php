<?php

namespace App\Http\Controllers;
use App\Http\Requests;


use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans=Plan::all();
        return view('plan.index')->with('plans',$plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plans = new Plan();
        $plans->codigo =$request->get('codigo');
        $plans->nombre =$request->get('nombre');
        $plans->descripcion =$request->get('descripcion');
        $plans->alimentos =$request->get('alimentos');
        $plans->fecha =$request->get('fecha');

        $plans->save();

        return redirect('/plans');
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
        $plan = Plan::find($id);
        return view('plan.edit')->with('plan',$plan);
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
        $plan= Plan::find($id);

        
        $plan->codigo =$request->get('codigo');
        $plan->nombre =$request->get('nombre');
        $plan->descripcion =$request->get('descripcion');
        $plan->alimentos =$request->get('alimentos');
        $plan->fecha =$request->get('fecha');

        $plan->save();

        return redirect('/plans');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan= Plan::find($id);
        $plan->delete();
        return redirect('/plans');
    }
}
