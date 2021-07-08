@extends('medico.index')
@section('content')
    <br>
    <div class="row pb-5">
        <div class="col text-center">
            <h1>Lista de Asignacion de Especialidades</h1>
        </div>
    </div>

    <div class="d-flex flex-row-reverse">
        <a class="btn btn-success btn-lg" href="{{ route('medico.asignacion.create')}}">
            <i class="bi bi-plus-lg"></i>
            Agregar asignacion
        </a>
    </div>

    <div class="row">
        <div class="col">
            <table class="table border">
                <thead>
                    <tr class="text-center">
                        <th>
                            <h4>
                                <strong>
                                Especialidad
                                </strong>
                            </h4>
                        </th>
                        <th>
                            <h4>
                                <strong>
                                Horario
                                </strong>
                            </h4>
                        </th>
                        <th>
                            <h4>
                                <strong>
                                Estado
                                </strong>
                            </h4>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignaciones as $item)
                    <tr class="text-center">
                        <td>
                            <h4>
                                {{$item->NombreEspecialidad}}
                            </h4>
                        </td>
                        <td>
                            <h4>
                                <i class="bi bi-clock"></i>
                                {{ date("H:i", strtotime( $item->HoraInicio)).' - '.date("H:i", strtotime( $item->HoraFin)) }}
                            </h4>
                        </td>
                        @if ($item->Estado==0)
                            <td>
                                <h4>
                                    <span class="badge bg-secondary">
                                        <i class="bi bi-lightbulb"></i>
                                        Inactivo
                                    </span>
                                </h4>
                            </td>
                        @else
                            <td>
                                <h4>
                                    <span class="badge bg-success">
                                        <i class="bi bi-lightbulb-fill"></i>
                                        Activo
                                    </span>
                                </h4>
                            </td>
                        @endif
                        <td>
                            <a class="btn btn-primary" href="">
                                <i class="bi bi-pencil-square"></i>
                                Editar
                            </a>
                            <a class="btn btn-danger">
                                @if ($item->Estado==0)
                                    Activar
                                @else
                                    Desactivar
                                @endif
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
