<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('Admin.medicos.listado', compact('medicos'));
    }

    public function create()
    {
        return view('Admin.medicos.crear');
    }

    public function store(Request $request)
    {
        $datos = $request;
        $medico = new Medico();
        $medico->DNI = $datos->DNI;
        $medico->Nombres = $datos->Nombres;
        $medico->Apellidos = $datos->Apellidos;
        $medico->FechaIngreso = $datos->fecha;
        $foto = $datos->file('foto')->store('public/medicos');
        $medico->URL = Storage::url($foto);
        $medico->IdUsuario = $datos->idusuario;
        $medico->save();
        return redirect('medicos')->with('mensaje', 'Medico Registrado');
    }

    public function edit($id)
    {
        $usuarios = Usuario::all();
        $medicos = Medico::find($id);
        return view('medicos.editar',compact(['usuarios','medicos']));
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
