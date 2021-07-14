<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        return view('Admin.dashboard.listado');
    }

    public function citasRegistradas(){
        $citas = DB::table('cita')
            ->join('especialidad_medico', 'cita.IdEspecialidadMedico', '=', 'especialidad_medico.IdEspecialidadMedico')
            ->join('medico', 'medico.IdMedico', '=', 'especialidad_medico.IdMedico')
            ->select('cita.*', 'especialidad_medico.*', 'medico.*')
            ->get();

        $citas = DB::select("select especialidad.NombreEspecialidad, count(especialidad.NombreEspecialidad) as 'Cantidad 'FROM cita
        inner join especialidad_medico ON cita.IdEspecialidadMedico = especialidad_medico.IdEspecialidadMedico
        inner join especialidad ON especialidad_medico.IdEspecialidad = especialidad.IdEspecialidad
        GROUP by especialidad.NombreEspecialidad");
        return view('Admin.dashboard.citasXespecialidad',compact('citas'));
    }
}
