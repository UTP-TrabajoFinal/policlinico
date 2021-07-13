@extends('paciente.index')
@section('content')
    <div class="container border scrollspy-example">
        <h1 class="display-4 text-center">Detalles de Cita</h1>
            @foreach ($asignacion as $item)
                <h1 class="display-6">
                    Especialidad:
                    <b>{{$item->NombreEspecialidad}}</b>
                </h1>
                <h1 class="display-6">
                    Especialista:
                    <b>{{'Dr(a) '.$item->Nombres.' '.$item->Apellidos}}</b>
                </h1>


            <form action="{{url('paciente/reserva/guardar/'.$item->IdEspecialidadMedico)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-2">
                    <h1 class="display-6">
                        Fecha:
                    </h1>
                </div>
                <div class="col-3 mt-2">
                    <input type="date" class="form-control" name="fecha" value="{{date("Y-m-d")}}">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-7">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>
                                    <h1 class="display-6">
                                        <b>H. Inicio</b>
                                    </h1>
                                </th>
                                <th>
                                    <h1 class="display-6">
                                        <b>H. Fin</b>
                                    </h1>
                                </th>
                                <th>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($resultado); $i++)
                            <tr class="text-center">
                                <td>
                                    <h1 class="display-6">
                                        <i class="far fa-clock"></i>
                                        {{ date("H:i", strtotime( $resultado[$i]['inicio']))}}
                                    </h1>
                                </td>
                                <td>
                                    <h1 class="display-6">
                                        <i class="far fa-clock"></i>
                                        {{ date("H:i", strtotime( $resultado[$i]['fin']))}}
                                    </h1>
                                </td>
                                <td>
                                    <button class="btn btn-success btn-lg" name="horainicio" type="submit" value="{{$resultado[$i]['inicio']}}">
                                        <i class="far fa-calendar-check"></i>
                                        Seleccionar
                                    </button>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        @endforeach
    </div>
@endsection
