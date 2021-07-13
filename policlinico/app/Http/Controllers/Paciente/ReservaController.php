<?php

namespace App\Http\Controllers\paciente;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\EspecialidadMedico;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function reservar($idasignacion)
    {
        $idusuario = session()->get('IdusuarioLogueado');
        $paciente = Paciente::Where('IdUsuario','=',$idusuario)->first();

        $asignacion = DB::table('especialidad_medico')
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
            ->where('especialidad_medico.IdEspecialidadMedico',$idasignacion)
            ->get();

        $horario = DB::table('especialidad_medico')
             ->select(
                 'especialidad_medico.HoraInicio',
                 'especialidad_medico.HoraFin')
             ->where('especialidad_medico.IdEspecialidadMedico', $idasignacion)
             ->get();

        $inicio = Carbon::createFromFormat('H:i:s', $horario[0]->HoraInicio);
        $fin = Carbon::createFromFormat('H:i:s', $horario[0]->HoraFin);
        $listHorario = array();
        while ($inicio != $fin) {
            array_push($listHorario,([
                'inicio' => $inicio->format('H:i:s'),
                'fin' => $inicio->addMinutes(30)->format('H:i:s')
            ]));
        }
        $resultado = collect($listHorario);

        return view('paciente.cita.detalle',compact('paciente','asignacion','resultado'));
    }

    public function guardar(Request $request,$idasignacion)
    {
        $idusuario = session()->get('IdusuarioLogueado');
        $paciente = Paciente::Where('IdUsuario','=',$idusuario)->first();

        $cita = new cita();
        $cita->IdPaciente = $paciente->IdPaciente;
        $cita->IdEspecialidadMedico = $idasignacion;
        $cita->FechaCita = $request->fecha;
        $cita->HoraInicio = Carbon::createFromFormat('H:i:s', $request->horainicio)->format('H:i:s');
        $cita->HoraFin = Carbon::createFromFormat('H:i:s', $request->horainicio)->addMinutes(30)->format('H:i:s');
        $cita->Estado = 1;
        $cita->save();
        return redirect('paciente/cita/'.$idusuario);
    }

    public function eliminar($id)
    {
        Cita::destroy($id);
        return back();
    }
}
