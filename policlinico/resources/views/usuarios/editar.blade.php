@extends('index')
@section('content')
    <h1 class="text-center">Editar Usuarios</h1>
    <form action="{{ url('usuario/'.$usuario->IdUsuario ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuarios.formulario')
    </form>
@endsection
