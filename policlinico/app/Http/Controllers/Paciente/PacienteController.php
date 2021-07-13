<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PacienteController extends Controller
{
    public function index()
    {
        $id = session()->get('IdusuarioLogueado');
        $paciente = Paciente::Where('IdUsuario','=',$id)->first();
        return view('paciente.index',compact('paciente'));
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
        $paciente = Paciente::where('IdUsuario', '=', Usuario::find($id)->IdUsuario)->first();
        return view('paciente.perfil.editar', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request;
        $paciente = Paciente::find($id);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/pacientes');
            $url = Storage::url($foto);

            if (strpos($paciente->URL, 'default.png') === false) {
                $temp = str_replace('storage', 'public', $paciente->URL);
                Storage::delete($temp);
            }


            Paciente::where('IdPaciente', '=', $id)->update([
                'DNI' => $datos['dni'],
                'Nombres' => $datos['nombres'],
                'Apellidos' => $datos['apellidos'],
                'Direccion' => $datos['direccion'],
                'Sexo' => $datos['sexo'],
                'Telefono' => $datos['telefono'],
                'URL' => $url
            ]);
        } else {
            Paciente::where('IdPaciente', '=', $id)->update([
                'DNI' => $datos['dni'],
                'Nombres' => $datos['nombres'],
                'Apellidos' => $datos['apellidos'],
                'Direccion' => $datos['direccion'],
                'Sexo' => $datos['sexo'],
                'Telefono' => $datos['telefono']
            ]);
        }
        return redirect()->route('paciente.perfil.index');
    }

    public function destroy($id)
    {
        //
    }
}
