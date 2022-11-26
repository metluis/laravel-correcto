<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('alimentos','App\Http\Controllers\AlimentoController');

Route::resource('users','App\Http\Controllers\Controller');

Route::resource('plans','App\Http\Controllers\PlanController');

Route::resource('imcs','App\Http\Controllers\ImcController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dash/crud/',  function() {
    return view ('crud.index');
});

Route::get('/dash/crud/create',  function() {
    return view ('crud.create');
});