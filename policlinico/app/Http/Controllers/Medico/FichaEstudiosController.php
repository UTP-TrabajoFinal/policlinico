<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\FichaEstudios;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FichaEstudiosController extends Controller
{
    public function index()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        $ficha = FichaEstudios::where('IdMedico','=',$id)->get();
        return view('medico.fichas.grados.listado',compact('medico','ficha'));
    }

    public function create()
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        return view('medico.fichas.grados.create',compact('medico'));
    }

    public function store(Request $request)
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);

        $ficha = new FichaEstudios;
        $ficha->Grado = $request->grado;
        $ficha->Institucion = $request->institucion;
        $ficha->Inicio = $request->inicio;
        $ficha->Fin = $request->fin;
        $ficha->IdMedico = $medico->IdMedico;
        $ficha->save();
        return redirect()->route('medico.fichagrado.index');
    }

    public function show($id)
    {
        return "sape";
    }

    public function edit($idficha)
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);
        $ficha = FichaEstudios::find($idficha);
        return view('medico.fichas.grados.edit',compact('medico','ficha'));
    }

    public function update(Request $request, $idficha)
    {
        $id = Session::get('IdmedicoLogueado');
        $medico = Medico::find($id);

        $ficha = FichaEstudios::find($idficha);;
        $ficha->Grado = $request->grado;
        $ficha->Institucion = $request->institucion;
        $ficha->Inicio = $request->inicio;
        $ficha->Fin = $request->fin;
        $ficha->IdMedico = $medico->IdMedico;
        $ficha->save();
        return redirect()->route('medico.fichagrado.index');
    }

    public function destroy($id)
    {
        $ficha = FichaEstudios::find($id);
        $ficha->delete();
        Session::flash('message', "Special message goes here");
        return redirect()->route('medico.fichagrado.index');
    }
}
