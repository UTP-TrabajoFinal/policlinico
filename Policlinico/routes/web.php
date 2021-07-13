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
Route::resource('Medico/Cita', App\Http\Controllers\Medico\CitaController::class)->names('medico.cita');
Route::get('paciente/cita/paciente/{id}',[App\Http\Controllers\Medico\CitaController::class,'paciente']);
Route::get('Medico/Diagnostico/{id}', [App\Http\Controllers\Medico\Diagnosticocontroller::class,'index']);
Route::post('Medico/Diagnostico/Guardar/{id}', [App\Http\Controllers\Medico\Diagnosticocontroller::class,'guardar']);
Route::resource('Medico/Ficha/Grado', App\Http\Controllers\Medico\FichaEstudiosController::class)->names('medico.fichagrado');
Route::resource('Medico/Ficha/Experiencia', App\Http\Controllers\Medico\FichaExperienciaController::class)->names('medico.fichaexperiencia');
Route::get('Medico/Receta/{id}', [App\Http\Controllers\Medico\RecetaController::class,'index']);
Route::post('Medico/Receta/Medicamento/{id}', [App\Http\Controllers\Medico\RecetaController::class,'store']);

//paciente
Route::resource('perfil', App\Http\Controllers\Paciente\PacienteController::class)->names('paciente.perfil');
Route::resource('usuario', App\Http\Controllers\Paciente\UsuarioController::class)->names('paciente.usuario');
Route::resource('cita', App\Http\Controllers\Paciente\CitaController::class)->except('index')->names('paciente.cita');

Route::get('paciente/cita/{id}',[App\Http\Controllers\Paciente\CitaController::class,'index']);
Route::get('paciente/reserva/{id}',[App\Http\Controllers\Paciente\ReservaController::class,'reservar']);
Route::post('paciente/reserva/guardar/{id}',[App\Http\Controllers\Paciente\ReservaController::class,'guardar']);
Route::get('paciente/reserva/eliminar/{id}',[App\Http\Controllers\Paciente\ReservaController::class,'eliminar']);
