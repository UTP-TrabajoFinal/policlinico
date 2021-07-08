<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use App\Models\EspecialidadMedico;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AsignacionController extends Controller
{

    public function index()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);

        $asignaciones = DB::table('especialidad_medico')
            ->join('medico', 'especialidad_medico.IdMedico', '=', 'medico.IdMedico')
            ->join('especialidad', 'especialidad_medico.IdEspecialidad', '=', 'especialidad.IdEspecialidad')
            ->where('medico.IdMedico', '=', $id)
            ->select(
                'especialidad_medico.IdEspecialidadMedico',
                'especialidad_medico.HoraInicio',
                'especialidad_medico.HoraFin',
                'especialidad_medico.Estado',
                'especialidad.IdEspecialidad',
                'especialidad.NombreEspecialidad',
                'medico.IdMedico',
                'medico.Nombres',
                'medico.Apellidos')
            ->get();
        return view('medico.asignacion.listado', compact('asignaciones','medico'));
    }

    public function create()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        $especialidades = Especialidad::all();
        return view('medico.asignacion.create',compact('especialidades','medico'));
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
