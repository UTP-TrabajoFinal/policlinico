@extends('paciente.index')
@section('content')
    <div class="row">
        <div class="col text-center">
            <h1 class="text-uppercase">Lista de Citas Programadas</h1>
        </div>
    </div>

    <div class="d-flex flex-row-reverse mb-4">
        <a class="btn btn-secondary btn-lg" href="{{route('paciente.cita.create')}}">
            <i class="far fa-calendar-alt"></i>
            Programar nueva cita
        </a>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th style="width: 15%">Especialidad</th>
                        <th style="width: 20%">Especialista</th>
                        <th style="width: 10%">F. Programada</th>
                        <th style="width: 15%">Horario</th>
                        <th style="width: 15%">Estado</th>
                        <th style="width: 25%">Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $item)
                        <tr class="text-center align-middle">
                            <td>{{$item->NombreEspecialidad}}</td>
                            <td>{{'Dr(a) '.strtoupper($item->Nombres.' '.$item->Apellidos)}}</td>
                            <td>{{date("d-m-Y", strtotime($item->FechaCita))}}</td>
                            <td>{{date("H:i", strtotime($item->HoraInicio)).' '.date("H:i", strtotime($item->HoraFin))}}</td>
                            @if ($item->Estado==1)
                                <td>
                                    <h5>
                                        <span class="badge bg-danger">
                                            <i class="fas fa-lightbulb"></i>
                                            Pendiente
                                        </span>
                                    </h5>
                                </td>
                            @else
                                <td>
                                    <h5>
                                        <span class="badge bg-primary">
                                            <i class="fas fa-lightbulb"></i>
                                            Atendido
                                        </span>
                                    </h5>
                                </td>
                            @endif
                            <td>
                                @if ($item->Estado==1)
                                    <a href="#" class="btn btn-success disabled mx-2" role="button" aria-disabled="true">
                                        <i class="fas fa-info-circle disable"></i>
                                        Informe de cita
                                    </a>
                                    <a href="{{url('paciente/reserva/eliminar/'.$item->IdCita)}}" class="btn btn-danger" >
                                        <i class="fas fa-trash-alt"></i>
                                        Eliminar
                                    </a>
                                @else
                                    <a href="" class="btn btn-success mx-2">
                                        <i class="fas fa-info-circle disable"></i>
                                        Informe de cita
                                    </a>
                                    <a href="" class="btn btn-danger disabled" role="button" aria-disabled="true">
                                        <i class="fas fa-trash-alt"></i>
                                        Eliminar
                                    </a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
