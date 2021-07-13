<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\Diagnostico;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Diagnosticocontroller extends Controller
{
    public function index($id)
    {
        $idmedico = Session::get('IdmedicoLogueado');
        $medico = Medico::find($idmedico);
        $cita = DB::table('cita')
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
            ->where('cita.IdCita','=',$id)
            ->orderBy('cita.FechaCita','asc')
            ->limit(1)
            ->get();
        $diagnostico = Diagnostico::find($cita[0]->IdCita);
        return view('medico.diagnostico.listado',compact('medico','cita','diagnostico'));
    }

    public function guardar(Request $request, $idcita)
    {
        $diagnostico = Diagnostico::find($idcita);
        if ($diagnostico == null) {
            $diagnostico = new Diagnostico();
        }
        $diagnostico->IdDiagnostico = $idcita;
        $diagnostico->Diagnostico = $request->diagnostico;
        $diagnostico->save();

        $cita = Cita::find($idcita);
        $cita->Estado = 0;
        $cita->save();

        Session::flash('message', "Diagnostico Guardado Correctamente!");
        return back();
    }
}
