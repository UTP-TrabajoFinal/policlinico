@extends('medico.index')
@section('content')
    <br>
    <div class="row">
        <div class="col">
            <h1 class="display-4 text-center text-uppercase">
                Ficha del Paciente
            </h1>
            <a href="{{url('Medico/Cita')}}" class="btn btn-outline-danger btn-lg">
                <i class="fas fa-chevron-left"></i>
                Regresar
            </a>
            <div class="row mt-4">
                <div class="col-8">
                    <h1 class="display-6">Datos Personales</h1>
                    <div class="row">
                        <div class="col-5">
                            <p class="h4 p-3 px-5">Nombres: <b class="text-uppercase">{{$paciente->Nombres}}</b></p>
                        </div>
                        <div class="col-6">
                            <p class="h4 p-3">Apellidos: <b class="text-uppercase">{{$paciente->Apellidos}}</b></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="h4 p-3 px-5">Dirección: <b class="text-uppercase">{{$paciente->Direccion}}</b></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="h4 p-3 px-5">
                                Sexo:
                                @if ($paciente->Sexo== 0)
                                    <b class="text-uppercase">
                                        Masculino
                                    </b>
                                @else
                                    <b class="text-uppercase">
                                        Femenina
                                    </b>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="h4 p-3 px-5">Telefono: <b class="text-uppercase">{{$paciente->Telefono}}</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h1 class="display-6">Foto de Perfil</h1>
                    <img src="{{$paciente->URL}}" class="figure-img img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
@endsection
