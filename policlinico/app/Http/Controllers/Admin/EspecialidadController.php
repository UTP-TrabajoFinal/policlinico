<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Especialidad;
use Illuminate\Support\Facades\Storage;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = Especialidad::paginate(5);
        return view('Admin.especialidades.listado', compact('especialidades'));
        //return redirect('especialidad')->with('mensaje', 'Especialidad creada');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.especialidades.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'NombreEspecialidad' => 'required',
            'Descripcion' => 'required'
        ];

        $messages = [
            'NombreEspecialidad.required' => 'El campo especialidad no puede estar en blanco',
            'Descripcion.required' => 'El campo descripcion no puede estar en blanco',
        ];

        $this->validate($request, $rules, $messages);
        $datos = request();
        if ($request->file('foto') != null) {
            $foto = $request->file('foto')->store('public/especialidades');
            $url = Storage::url($foto);

            Especialidad::create([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
                'Descripcion' => $datos['Descripcion'],
                'Foto' => $url
            ]);
        } else {
            Especialidad::create([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
                'Descripcion' => $datos['Descripcion']
            ]);
        }
        return redirect('Admin/especialidad')->with('mensaje', 'Especialidad creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        return view('Admin.especialidades.editar', compact('especialidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'NombreEspecialidad' => 'required',
            'Descripcion' => 'required'
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
                'Descripcion' => $datos['Descripcion'],
                'Foto' => $url
            ]);
        } else {
            Especialidad::where('IdEspecialidad', '=', $id)->update([
                'NombreEspecialidad' => $datos['NombreEspecialidad'],
                'Descripcion' => $datos['Descripcion']
            ]);
        }

        return redirect('especialidad')->with('mensaje', 'Especialidad Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
