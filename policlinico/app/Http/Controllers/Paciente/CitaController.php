<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use App\Models\EspecialidadMedico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Function_;

class CitaController extends Controller
{
    public function index($id)
    {
        $paciente = Paciente::where('IdUsuario','=',$id)->first();
        $citas = DB::table('cita')
            ->join('especialidad_medico','especialidad_medico.IdEspecialidadMedico','=','cita.IdEspecialidadMedico')
            ->join('medico','especialidad_medico.IdMedico','=','medico.IdMedico')
            ->join('especialidad','especialidad_medico.IdEspecialidad','=','especialidad.IdEspecialidad')
            ->select(
                'especialidad_medico.IdEspecialidadMedico',
                'medico.IdMedico',
                'medico.Nombres',
                'medico.Apellidos',
                'especialidad.IdEspecialidad',
                'especialidad.NombreEspecialidad',
                'cita.IdCita',
                'cita.FechaCita',
                'cita.HoraInicio',
                'cita.HoraFin',
                'cita.Estado',
            )
            ->orderBy('cita.FechaCita','asc')
            ->get();

        return view('paciente.cita.listado',compact('paciente','citas'));
    }

    public function create()
    {
        $id = session()->get('IdusuarioLogueado');
        $paciente = Paciente::Where('IdUsuario','=',$id)->first();
        $asignaciones = DB::table('especialidad_medico')
            ->join('medico', 'especialidad_medico.IdMedico', '=', 'medico.IdMedico')
            ->join('especialidad', 'especialidad_medico.IdEspecialidad', '=', 'especialidad.IdEspecialidad')
            ->select(
                'especialidad_medico.IdEspecialidadMedico',
                'especialidad_medico.HoraInicio',
                'especialidad_medico.HoraFin',
                'especialidad_medico.Estado',
                'especialidad.IdEspecialidad',
                'especialidad.foto',
                'especialidad.NombreEspecialidad',
                'medico.IdMedico',
                'medico.Nombres',
                'medico.Apellidos',
                'medico.URL')
            ->where('especialidad_medico.Estado','=','1')
            ->orderBy('especialidad.NombreEspecialidad')
            ->get();

        return view('paciente.cita.crear',compact('paciente','asignaciones'));
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function reservar($id)
    {


    }
}
