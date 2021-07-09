@extends('paciente.index')
@section('content')
    <br>
    <div class="row">
        <div class="col-4">
            <h1 class="text-left">Editar Usuario</h1>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            @isset($mensaje)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{ $mensaje }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endisset
        </div>
    </div>
    <form action="{{route('paciente.usuario.update',$usuario->IdUsuario)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <h4>Usuario</h4>
                    <input type="text" class="form-control" value="{{$usuario->Usuario}}" name="usuario">

                    <h4>Password</h4>
                    <input type="password" class="form-control" value="{{ $decrypted = Crypt::decrypt($usuario->Password) }}" name="password">

                    <br>
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-layer-forward"></i>
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
