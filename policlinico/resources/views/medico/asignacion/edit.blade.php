@extends('medico.index')
@section('content')
    <br>
    <div class="row pb-3">
        <div class="col-8 text-center">
            <h1>Editar Asignacion de especialidades</h1>
        </div>
    </div>
    <div class="row" >
        <div class="col-8">
            <form action="{{route('medico.asignacion.update',$asignacion->IdEspecialidadMedico)}}" method="POST">
                @csrf
                @method('PATCH')
                <div >
                    <h3>
                        <strong>Medico </strong>
                        {{$medico->Nombres.' '.$medico->Apellidos}}
                    </h3>
                    <br>
                    <h3>Especialidades</h3>
                    <select name="idespecialidad" class="form-select form-select-lg mb-3">
                        @foreach ($especialidades as $item)
                            @if ($asignacion->IdEspecialidad == $item->IdEspecialidad)
                                <option value="{{$item->IdEspecialidad }}" selected>{{$item->NombreEspecialidad}}</option>
                            @else
                                <option value="{{$item->IdEspecialidad }}">{{$item->NombreEspecialidad}}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="row">
                        <div class="col-3">
                            <h3>Fecha de Inicio</h3>
                        </div>
                        <div class="col-3">
                            <input type="time" class="form-control mb-3" min="08:00" value="{{$asignacion->HoraInicio}}" name="inicio">
                        </div>
                        <div class="col-3">
                            <h3>Fecha de Fin</h3>
                        </div>
                        <div class="col-3">
                            <input type="time" class="form-control mb-3" min="08:00" value="{{$asignacion->HoraFin}}" name="fin">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
