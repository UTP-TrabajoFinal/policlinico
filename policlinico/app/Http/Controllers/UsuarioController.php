<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::join('tipo_usuario', 'usuario.IdTipoUsuario', '=', 'tipo_usuario.IdTipoUsuario')->paginate(4);
        return view('usuarios.listado', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipousuario = TipoUsuario::all();
        return view('usuarios.crear', compact('tipousuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request();
        $usuario = new Usuario;
        $usuario->Usuario = $request->usuario;
        $usuario->Password = Crypt::encrypt($request->password);
        $usuario->IdTipoUsuario = $request->idtipousuario;
        $usuario->save();

        return redirect('usuario');
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
        $usuario = Usuario::findOrFail($id);
        $tipousuario = TipoUsuario::all();
        $pass = Crypt::decrypt($usuario->Password);
        return view('usuarios.editar', compact(['usuario', 'tipousuario','pass']));
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
        $datos = request();
        $usuario = Usuario::find($id);
        $usuario->Usuario = $datos->usuario;
        $usuario->Password = Crypt::encrypt($datos->password);
        $usuario->IdTipoUsuario = $datos->idtipousuario;
        $usuario->save();
        return redirect('usuario')->with('mensaje', 'Usuario Modificado');
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
