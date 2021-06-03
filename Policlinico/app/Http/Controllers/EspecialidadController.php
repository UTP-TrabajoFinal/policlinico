<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

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
        return view('especialidades.listado', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especialidades.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'NombreEspecialidad' => 'required',
            'Descripcion' => 'required'
        ]);
        $datos = request()->except('_token');
        Especialidad::create($datos);
        //return redirect()->route('especialidades.index')
        return redirect('especialidad')->with('mensaje','Especialidad creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('especialidades.editar',compact('especialidad'));
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
        $especialidad = Especialidad::findOrFail($id);
        $datos = request()->except(['_token','_method']);
        Especialidad::where('IdEspecialidad','=',$id)->update($datos);

        $especialidad = Especialidad::findOrFail($id);
        return redirect('especialidad')->with('mensaje','Especialidad Modificada');
        //return view('especialidades.editar',compact('especialidad'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
