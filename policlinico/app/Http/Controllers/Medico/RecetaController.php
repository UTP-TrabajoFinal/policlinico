<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\Diagnostico;
use App\Models\Frecuencia;
use App\Models\Medicamento;
use App\Models\Medico;
use App\Models\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $receta = DB::table('receta')
            ->join('medico','receta.IdMedicamento','=','receta.IdMedicamento')
            ->join('frecuencia','receta.IdFrecuencia','=','frecuencia.IdFrecuencia')
            ->select(
                'especialidad_medico.IdEspecialidadMedico',
            )
            ->where('receta.IdReceta','=',$id)
            ->get();

        return view('medico.receta.listado',compact('cita','medico','diagnostico','medicamentos','frecuencias'));
    }

    public function create()
    {

    }

    public function store(Request $request,$id)
    {
        $receta = new Receta;
        $receta->IdCita  = $id;
        $receta->IdMedicamento = $request->medicamento;
        $receta->IdFrecuencia  = $request->frecuencia;
        $receta->CantidadDias  = $request->cantidad;
        $receta->save();

        return redirect('Medico/Receta/'.$id);
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
