<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\AsignacionEspecialidadMedico;
use App\Http\Controllers\LogueoController;
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
    return view('login');
});

Route::resource('especialidad', EspecialidadController::class);
Route::resource('tipousuario', TipoUsuarioController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('medico', MedicoController::class);
Route::resource('asignacion', AsignacionEspecialidadMedico::class);
Route::resource('login', LogueoController::class);
