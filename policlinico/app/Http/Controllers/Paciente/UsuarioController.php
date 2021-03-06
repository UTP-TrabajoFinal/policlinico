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
        $usuario->Usuario = $request->DNI;
        $usuario->Password = Crypt::encrypt($request->Password);
        $usuario->IdTipoUsuario = 3;
        $usuario->save();

        $paciente = new Paciente();
        $paciente->DNI = $request->DNI;
        $paciente->Nombres = $request->Nombres;
        $paciente->Apellidos = $request->Apellidos;
        $paciente->Direccion = $request->Direccion;
        $paciente->Sexo = $request->Sexo;
        $paciente->Telefono = $request->Telefono;
        $paciente->IdUsuario  = $usuario->IdUsuario;
        $paciente->save();
        return redirect('/')->with('mensaje', 'Usuario Creado');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $usuario = Usuario::Where('IdUsuario','=',$id)->first();
        $paciente = Paciente::Where('IdUsuario','=',$usuario->IdUsuario)->first();
        return view('paciente.usuario.editar',compact('usuario','paciente'));
    }

    public function update(Request $request, $id)
    {
        Usuario::Where('IdUsuario','=',$id)->update([
            'Usuario' => $request->usuario,
            'Password' => Crypt::encrypt($request->password),
        ]);
        $usuario = Usuario::Where('IdUsuario','=',$id)->first();
        $paciente = Paciente::Where('IdUsuario','=',$usuario->IdUsuario)->first();
        return view('paciente.index',compact('paciente'));
    }

    public function destroy($id)
    {
    }
}
