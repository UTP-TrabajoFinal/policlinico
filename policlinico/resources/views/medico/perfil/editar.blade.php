@extends('medico.index')
@section('content')
    <br>
    <div class="row">
        <div class="col-4">
            <h1 class="text-left">Editar Perfil</h1>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            @if ($msg = Session::get('mensaje'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{ $msg }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <form action="{{url('Medico/Registro/'.$medico->IdMedico)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <h4>DNI</h4>
                    <input type="text" class="form-control" value="{{$medico->DNI}}" name="dni">

                    <h4>Nombres</h4>
                    <input type="text" class="form-control" value="{{$medico->Nombres}}" name="nombres">

                    <h4>Apellidos</h4>
                    <input type="text" class="form-control" value="{{$medico->Apellidos}}" name="apellidos">

                    <h4>Fecha de Ingreso</h4>
                    <input type="date" class="form-control" value="{{$medico->FechaIngreso}}" name="fecha">

                    <br><br>

                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-layer-forward"></i>
                        Guardar
                    </button>
                </div>
                <div class="col-7">
                    <h4>Foto</h4>
                    <input type="file" name="foto" id="foto" class="form-control-file">
                    <br><br>
                    <img width="300px" src="{{asset($medico->URL)}}" alt="" name="nombreURL" id="nombreURL">
                </div>
            </div>
        </div>
    </form>
@endsection
