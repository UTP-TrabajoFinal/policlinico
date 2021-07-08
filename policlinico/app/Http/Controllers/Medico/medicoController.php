<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class medicoController extends Controller
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
        $medico = Medico::where('IdMedico', '=', $id)->first();
        return view('medico.perfil.editar', compact('medico'));
    }

    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);
        $datos = $request;
        if ($datos->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/medicos');
            $url = Storage::url($foto);

            if (strpos($medico->URL, 'default.png') === false) {
                $temp = str_replace('storage', 'public', $medico->URL);
                Storage::delete($temp);
            }

            Medico::where('IdMedico','=',$id)->update([
                'DNI' => $datos->dni,
                'Nombres' => $datos->nombres,
                'Apellidos' => $datos->apellidos,
                'FechaIngreso' => $datos->fecha,
                'URL' => $url
            ]);
        }else{
            Medico::where('IdMedico','=',$id)->update([
                'DNI' => $datos->dni,
                'Nombres' => $datos->nombres,
                'Apellidos' => $datos->apellidos,
                'FechaIngreso' => $datos->fecha
            ]);
        }
        $medico = Medico::find($id);
        $request->session()->put(['mensaje' => 'Medico Actualizado Correctamente!.']);
        return view('medico.perfil.editar',compact('medico'));
    }

    public function destroy($id)
    {
        //
    }
}
