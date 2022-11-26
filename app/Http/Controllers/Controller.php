<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
            $users = User::all();
            return view('user.index')->with('users',$users);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('user.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $users = new User();
            $users->name =$request->get('name');
            $users->email =$request->get('email');
            $users->password =$request->get('password');
            $users->edad =$request->get('edad');
            $users->peso =$request->get('peso');
            $users->talla =$request->get('talla');
    
            $users->save();
    
            return redirect('/users');
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
            $user = User::find($id);
            return view('user.edit')->with('user',$user);
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
            $user= User::find($id);
    
            $user->name =$request->get('name');
            $user->email =$request->get('email');
            $user->password =$request->get('password');
            $user->edad =$request->get('edad');
            $user->peso =$request->get('peso');
            $user->talla =$request->get('talla');

            $user->save();
    
            return redirect('/users');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $user = User::find($id);
            $user->delete();
            return redirect('/users');
        }
    }