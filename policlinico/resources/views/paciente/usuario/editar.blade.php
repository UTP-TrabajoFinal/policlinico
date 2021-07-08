@extends('paciente.index')
@section('content')
    <br>
    <div class="row">
        <div class="col-3">
            <a href="{{ url('/especialidad') }}" class="btn btn-outline-danger btn-lg">
                <i class="bi bi-arrow-bar-left"></i>
                Volver
            </a>
        </div>
        <div class="col-5">
            @if ($msg = Session::get('mensaje'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{ $msg }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="col-4">

        </div>
    </div>
    <h1 class="text-center">Editar Usuario</h1>

    <form action="{{route('registro.update',$paciente->IdPaciente)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
            <div class="row">
                <div class="col-7">
                    <h4>DNI</h4>
                    <input type="text" class="form-control" value="{{$paciente->DNI}}" name="dni">

                    <h4>Nombres</h4>
                    <input type="text" class="form-control" value="{{$paciente->Nombres}}" name="nombres">

                    <h4>Apellidos</h4>
                    <input type="text" class="form-control" value="{{$paciente->Apellidos}}" name="apellidos">

                    <h4>Direccion</h4>
                    <input type="text" class="form-control" value="{{$paciente->Direccion}}" name="direccion">

                    <h4>Sexo</h4>
                    <select name="sexo" id="" class="form-control">
                        @if ($paciente->Sexo==1)
                            <option value="0" selected>Masculino</option>
                            <option value="1">Femenino</option>
                        @else
                            <option value="0">Masculino</option>
                            <option value="1" selected>Femenino</option>
                        @endif
                    </select>

                    <h4>Telefono</h4>
                    <input type="text" class="form-control" value="{{$paciente->Telefono}}" name="telefono">
                    <br><br>

                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-layer-forward"></i>
                        Guardar
                    </button>
                </div>
                <div class="col-1">

                </div>
                <div class="col-4">
                    <h4>Foto</h4>
                    <input type="file" name="foto" id="foto" class="form-control-file">
                    <br><br>
                    <img width="300px" src="{{asset($paciente->URL)}}" alt="">
                </div>
            </div>
        </div>
    </form>
@endsection
