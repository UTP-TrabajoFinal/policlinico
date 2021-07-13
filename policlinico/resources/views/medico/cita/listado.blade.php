@extends('medico.index')
@section('content')
    <br>
    <h1 class="display-4 text-center uppercase">Lista de Citas Programadas</h1>
    <div class="row">
        <div class="col-12">

                <table class="table">
                    <thead>
                        <tr class="text-center align-middle">
                            <th>
                                <p class="h4">
                                    Paciente
                                </p>
                            </th>
                            <th>
                                <p class="h4">
                                    Especialidad
                                </p>
                            </th>
                            <th>
                                <p class="h4">
                                    Fecha
                                </p>
                            </th>
                            <th>
                                <p class="h4">
                                    Horario
                                </p>
                            </th>
                            <th>
                                <p class="h4">
                                    Opcion
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($citas as $item)
                            <tr class="text-center align-middle">
                                <td>
                                    <p class="h4 text-uppercase" >
                                        {{$item->Nombres.' '.$item->Apellidos}}
                                    </p>
                                </td>
                                <td>
                                    <p class="h4 text-uppercase">
                                        {{$item->NombreEspecialidad }}
                                    </p>
                                </td>
                                <td>
                                    <p class="h4 text-uppercase">
                                        {{date("d-m-Y", strtotime($item->FechaCita))}}
                                    </p>
                                </td>
                                <td>
                                    <p class="h4 text-uppercase">
                                        {{date("H:i", strtotime($item->HoraInicio)).' - '.date("H:i", strtotime($item->HoraFin))}}
                                    </p>

                                </td>
                                <td>
                                    <a href="{{url('paciente/cita/paciente/'.$item->IdPaciente)}}" class="d-block btn btn-success mb-2">
                                        <i class="fas fa-eye"></i>
                                        Ver Paciente
                                    </a>
                                    <a href="{{url('Medico/Diagnostico/'.$item->IdCita)}}" class="d-block btn btn-secondary mb-2">
                                        <i class="fas fa-id-card"></i>
                                        Atender Cita
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
