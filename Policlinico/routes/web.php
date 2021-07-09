<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogueoController;


Route::get('/', function () {
    request()->session()->forget('mensaje');
    return view('login');
});


Route::resource('admin', LogueoController::class);

//Admin
Route::resource('Admin/especialidad', App\Http\Controllers\Admin\EspecialidadController::class);

//medico
Route::resource('Medico/Registro', App\Http\Controllers\Medico\medicoController::class);
Route::resource('Medico/Usuario', App\Http\Controllers\Medico\UsuarioController::class)->names('medico.usuario');
Route::resource('Medico/Asignacion', App\Http\Controllers\Medico\AsignacionController::class)->names('medico.asignacion');

//paciente
Route::resource('perfil', App\Http\Controllers\Paciente\PacienteController::class)->names('paciente.perfil');
Route::resource('usuario', App\Http\Controllers\Paciente\UsuarioController::class)->names('paciente.usuario');
Route::resource('cita', App\Http\Controllers\Paciente\CitaController::class)->names('paciente.cita');
