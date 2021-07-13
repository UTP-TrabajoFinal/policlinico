<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\Diagnostico;
use App\Models\Frecuencia;
use App\Models\Medicamento;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecetaController extends Controller
{
    public function index($id)
    {
        $cita = Cita::find($id);
        $medico = Medico::find(Session::get('IdmedicoLogueado'));
        $diagnostico = Diagnostico::find($id)->first();
        $medicamentos = Medicamento::all();
        $frecuencias = Frecuencia::all();
        return view('medico.receta.listado',compact('cita','medico','diagnostico','medicamentos','frecuencias'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
