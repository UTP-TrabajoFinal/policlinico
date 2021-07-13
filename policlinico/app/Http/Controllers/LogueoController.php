<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LogueoController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $user = $request->user;
        $pass = $request->pass;
        $usuario = Usuario::where('Usuario', $user)->first();
        if ($usuario != null) {
            if (Crypt::decrypt($usuario->Password) == $pass) {
                $medico = Medico::where('IdUsuario','=',$usuario->IdUsuario)->first();
                $request->session()->forget('usuarioLogueado');
                $request->session()->forget('IdusuarioLogueado');
                $request->session()->forget('IdmedicoLogueado');
                $request->session()->put(['usuarioLogueado' => $usuario->Usuario]);
                $request->session()->put(['IdusuarioLogueado' => $usuario->IdUsuario]);
                switch ($usuario->IdTipoUsuario) {
                    case 1:
                        return view('admin.index');
                        break;
                    case 2:
                        $request->session()->put(['IdmedicoLogueado' => $medico->IdMedico]);
                        $medico = Medico::where('IdUsuario','=',$usuario->IdUsuario)->first();
                        $request->session()->forget('mensaje');
                        return view('medico.index',compact('medico'));
                        break;
                    case 3:
                        $paciente = Paciente::where('IdUsuario','=',$usuario->IdUsuario)->first();
                        return view('paciente.index',compact('paciente'));
                        break;
                }
            } else {
                return redirect('/')->with('mensaje', 'Usuario no encontrado');
            }
        } else {
            return redirect('/')->with('mensaje', 'Usuario no encontrado');
        }
    }

    public function show($id)
    {
        return redirect('/');
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
