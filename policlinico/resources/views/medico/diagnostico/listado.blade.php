@extends('medico.index')
@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{url('Medico/Cita')}}" class="btn btn-outline-danger btn-lg mt-3">
                <i class="fas fa-chevron-left"></i>
                Regresar
            </a>
        </div>
        <div class="col-8"></div>
        <div class="col-2">
            <a href="{{url('Medico/Receta/'.$diagnostico->IdDiagnostico)}}" class="btn btn-outline-primary btn-lg mt-3">
                Receta
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>

    @if ($msg = Session::get('message'))
        <div class="d-flex flex-row-reverse">
            <div class="alert alert-warning alert-dismissible show mt-3" role="alert">
                <p>{{ $msg }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <h1 class="display-4 text-center uppercase">Atención de Cita</h1>
    @foreach ($cita as $item)
        <form action="{{url('Medico/Diagnostico/Guardar/'.$item->IdCita)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <h1 class="display-6">
                        Paciente:
                        <b class="text-uppercase">
                            {{$item->Nombres.' '.$item->Apellidos}}
                        </b>
                    </h1>
                    <h1 class="display-6">
                        Especialidad:
                        <b class="text-uppercase">
                            {{$item->NombreEspecialidad}}
                        </b>
                    </h1>
                    <h1 class="display-6">
                        Fecha:
                        <b class="text-uppercase">
                            {{date("d-m-Y", strtotime($item->FechaCita))}}
                        </b>
                    </h1>
                    <h1 class="display-6 mb-4" style="border-bottom: solid #4E7DA6;">
                        Horario:
                        <b class="text-uppercase">
                            {{date("H:i", strtotime($item->HoraInicio)).' - '.date("H:i", strtotime($item->HoraFin))}}
                        </b>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <h1 class="display-6">
                        Diagnostico
                    </h1>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    @if ($diagnostico!=null)
                        <textarea class="form-control" style="resize: none;" rows="5" name="diagnostico">{{$diagnostico->Diagnostico}}</textarea>
                    @else
                        <textarea class="form-control" style="resize: none;" rows="5" name="diagnostico"></textarea>
                    @endif

                </div>
            </div>
            <button class="btn btn-success btn-lg" style="font-size: 2rem;">
                <i class="far fa-save"></i>
                Guardar
            </button>
        </form>
    @endforeach
@endsection
