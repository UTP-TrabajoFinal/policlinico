<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    public function index()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        $citas = DB::table('cita')
            ->join('especialidad_medico','especialidad_medico.IdEspecialidadMedico','=','cita.IdEspecialidadMedico')
            ->join('paciente','cita.IdPaciente','=','paciente.IdPaciente')
            ->join('especialidad','especialidad_medico.IdEspecialidad','=','especialidad.IdEspecialidad')
            ->select(
                'especialidad_medico.IdEspecialidadMedico',
                'especialidad_medico.IdMedico',
                'paciente.IdPaciente',
                'paciente.Nombres',
                'paciente.Apellidos',
                'paciente.URL',
                'especialidad.IdEspecialidad',
                'especialidad.NombreEspecialidad',
                'especialidad.foto',
                'cita.IdCita',
                'cita.FechaCita',
                'cita.HoraInicio',
                'cita.HoraFin',
                'cita.Estado',
            )
            ->where('especialidad_medico.IdMedico','=',$medico->IdMedico)
            ->orderBy('cita.FechaCita','asc')
            ->get();
        return view('medico.cita.listado',compact('medico','citas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function paciente($id)
    {
        $paciente = Paciente::find($id);
        $medico = Medico::find(Session::get('IdmedicoLogueado'));
        return view('medico.cita.paciente',compact('medico','paciente'));
    }
}
