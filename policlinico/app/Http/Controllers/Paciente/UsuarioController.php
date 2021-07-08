<?php

namespace App\Http\Controllers\paciente;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('paciente.usuario.crear');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Usuario = $request->user;
        $usuario->Password = Crypt::encrypt($request->pass);
        $usuario->IdTipoUsuario = 4;
        $usuario->save();

        $paciente = new Paciente();
        $paciente->IdUsuario = $usuario->IdUsuario;
        $paciente->save();
        return redirect('/')->with('mensaje', 'Usuario Creado');
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
