<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Especialidad;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EspecialidadController extends Controller
{
    public function index()
    {
        $especialidades = Especialidad::paginate(4);
        return view('Admin.especialidades.listado', compact('especialidades'));
    }

    public function create()
    {
        return view('Admin.especialidades.crear');
    }

    public function store(Request $request)
    {
        $rules = [
            'NombreEspecialidad' => 'required',
        ];

        $messages = [
            'NombreEspecialidad.required' => 'El campo especialidad no puede estar en blanco',
        ];

        $this->validate($request, $rules, $messages);
        $datos = request();
        if ($request->file('foto') != null) {
            $foto = $request->file('foto')->store('public/especialidades');
            $url = Storage::url($foto);

            Especialidad::create([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
                'Foto' => $url
            ]);
        } else {
            Especialidad::create([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
            ]);
        }
        Session::flash('mensaje', 'Especialidad creada!.');
        return redirect('Admin/especialidad');
    }

    public function edit($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        return view('Admin.especialidades.editar', compact('especialidad'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'NombreEspecialidad' => 'required',
        ]);

        $datos = request();

        $especialidad = Especialidad::findOrFail($id);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/especialidades');
            $url = Storage::url($foto);

            $temp = str_replace('storage', 'public', $especialidad->foto);
            Storage::delete($temp);

            Especialidad::where('IdEspecialidad', '=', $id)->update([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
                'Foto' => $url
            ]);
        } else {
            Especialidad::where('IdEspecialidad', '=', $id)->update([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
            ]);
        }

        return redirect('especialidad')->with('mensaje', 'Especialidad Modificada');
    }
}
