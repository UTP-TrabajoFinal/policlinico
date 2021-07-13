@extends('medico.index')
@section('content')
    <h1 class="display-4 text-center uppercase">Atención de Cita</h1>
    @foreach ($cita as $item)
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
    @endforeach
    <div class="row">
        <div class="col-10">
            <h1 class="display-6">
                Diagnostico
            </h1>
        </div>
        <div class="col-2">
            <a href="" class="btn btn-secondary btn-lg">
                <i class="fas fa-capsules"></i>
                Receta Medica
            </a>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <textarea class="form-control" style="resize: none;" rows="5"></textarea>
        </div>
    </div>
    <a href="" class="btn btn-success btn-lg" style="font-size: 2rem;">
        <i class="far fa-save"></i>
        Guardar
    </a>

@endsection
