<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        $usuario = new Usuario;
        $usuario->Usuario = $datos->DNI;
        $usuario->Password = $datos->DNI;
        $usuario->IdTipoUsuario = 2;
        $usuario->save();

        $medico = new Medico();
        $medico->DNI = $datos->DNI;
        $medico->Nombres = $datos->Nombres;
        $medico->Apellidos = $datos->Apellidos;
        $medico->FechaIngreso = $datos->fecha;
        $foto = $datos->file('foto')->store('public/medicos');
        $medico->URL = Storage::url($foto);
        $medico->IdUsuario = $usuario->IdUsuario;
        $medico->save();

        Session::flash('mensaje', 'Medico creado!.');
        return redirect('Admin/Medico');
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
