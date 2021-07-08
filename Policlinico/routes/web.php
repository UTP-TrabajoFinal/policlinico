<?php

use Illuminate\Support\Facades\Route;
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
    request()->session()->forget('mensaje');
    return view('login');
});


Route::resource('admin', LogueoController::class);
Route::resource('registro', App\Http\Controllers\paciente\UsuarioController::class);

//Admin

Route::resource('Admin/especialidad', App\Http\Controllers\Admin\EspecialidadController::class);
//Route::resource('tipousuario', TipoUsuarioController::class);
//Route::resource('usuario', UsuarioController::class);
//Route::resource('medico', MedicoController::class);
//Route::resource('asignacion', AsignacionEspecialidadMedico::class);

//medico
Route::resource('Medico/Registro', App\Http\Controllers\Medico\medicoController::class);
Route::resource('Medico/Usuario', App\Http\Controllers\Medico\UsuarioController::class)->names('medico.usuario');
Route::resource('Medico/Asignacion', App\Http\Controllers\Medico\AsignacionController::class)->names('medico.asignacion');


//paciente
Route::resource('perfil', App\Http\Controllers\Paciente\PacienteController::class)->names('paciente.perfil');
Route::resource('usuario', App\Http\Controllers\Paciente\UsuarioController::class)->names('paciente.usuario');
