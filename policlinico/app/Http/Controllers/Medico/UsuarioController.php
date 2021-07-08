<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $medico = Medico::where('IdUsuario','=',$id)->first();
        return view('medico.usuario.editar', compact(['usuario','medico']));
    }

    public function update(Request $request, $id)
    {
        $datos = $request;
        $usuario = Usuario::where('IdUsuario','=',$id)->update([
            'Usuario' => $datos->usuario,
            'Password' => Crypt::encrypt($datos->password)
        ]);
        $mensaje = 'Usuario Actualizado Correctamente!.';
        $usuario = Usuario::find($id);
        $medico = Medico::where('IdUsuario','=',$id)->first();
        return view('medico.usuario.editar', compact(['usuario','medico','mensaje']));
    }

    public function destroy($id)
    {
        //
    }
}
