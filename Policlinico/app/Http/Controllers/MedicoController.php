<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::paginate(5);
        return view('medicos.listado',compact('medicos'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        return view('medicos.crear',compact('usuarios'));
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
        $url = Storage::url($foto);
        $medico->URL = $url;
        $medico->IdUsuario = $datos->idusuario;
        $medico->save();
        return redirect('medicos')->with('mensaje', 'Medico Registrado');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
