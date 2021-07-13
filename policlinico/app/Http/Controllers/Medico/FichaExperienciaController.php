<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\FichaExperiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Medico;

class FichaExperienciaController extends Controller
{
    public function index()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        $ficha = FichaExperiencia::where('IdMedico','=',$id)->get();
        return view('medico.fichas.laboral.listado',compact('medico','ficha'));
    }

    public function create()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        return view('medico.fichas.laboral.create',compact('medico'));
    }

    public function store(Request $request)
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);

        $ficha = new FichaExperiencia;
        $ficha->Institucion = $request->institucion;
        $ficha->Cargo = $request->cargo;
        $ficha->Inicio = $request->inicio;
        $ficha->Fin = $request->fin;
        $ficha->IdMedico = $medico->IdMedico;
        $ficha->save();
        return redirect()->route('medico.fichaexperiencia.index');
    }

    public function edit($idficha)
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        $ficha = FichaExperiencia::find($idficha);
        return view('medico.fichas.laboral.edit',compact('medico','ficha'));
    }

    public function update(Request $request, $idficha)
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);

        $ficha = FichaExperiencia::find($idficha);;
        $ficha->Institucion = $request->institucion;
        $ficha->Cargo = $request->cargo;
        $ficha->Inicio = $request->inicio;
        $ficha->Fin = $request->fin;
        $ficha->IdMedico = $medico->IdMedico;
        $ficha->save();
        return redirect()->route('medico.fichaexperiencia.index');
    }

    public function destroy($id)
    {
        $ficha = FichaExperiencia::find($id);
        $ficha->delete();
        Session::flash('message', "Registro Eliminado Correctamente!");
        return redirect()->route('medico.fichaexperiencia.index');
    }
}
