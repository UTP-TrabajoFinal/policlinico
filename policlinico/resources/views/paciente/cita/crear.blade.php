@extends('paciente.index')
@section('content')
    <div class="row">
        <div class="col text-center mb-2">
            <h2>Especialidades Disponibles</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">

                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th>Especialidad</th>
                            <th>Especialista</th>
                            <th>Horario</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($asignaciones as $item)
                            <tr>
                                <td>
                                    <img src="{{asset($item->foto)}}" width="100em">
                                    {{$item->NombreEspecialidad}}
                                </td>
                                <td>
                                    <img src="{{asset($item->URL)}}" width="100em">
                                    {{'Dr '.$item->Nombres.' '.$item->Apellidos}}
                                </td>
                                <td>{{date("H:i", strtotime( $item->HoraInicio)).' - '.date("H:i", strtotime( $item->HoraFin))}}</td>
                                <td>
                                    <a href="" class="btn btn-success">Ver Medico</a>
                                    <a href="{{url('paciente/reserva/'.$item->IdEspecialidadMedico)}}" class="btn btn-secondary">Reservar Cita</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

        </div>
    </div>
@endsection
