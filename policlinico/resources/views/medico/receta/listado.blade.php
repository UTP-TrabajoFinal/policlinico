@extends('medico.index')
@section('content')
    @if ($msg = Session::get('message'))
        <div class="d-flex flex-row-reverse">
            <div class="alert alert-warning alert-dismissible show mt-3" role="alert">
                <p>{{ $msg }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <h1 class="display-4 text-center">
                Detalle de Receta Medica
            </h1>
            <div class="row border">
                <div class="col-3">
                    <h1 class="display-6">
                        Diagnóstico:
                    </h1>
                    <p class="fs-3 m-2 border">
                        {{$diagnostico->Diagnostico}}
                    </p>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <form action="{{url('Medico/Receta/Medicamento/'.$diagnostico->IdDiagnostico)}}" method="POST">
                        @csrf
                        <h1 class="display-6 text-center">
                            Lista de Medicamentos
                        </h1>
                        <div class="row border">
                            <div class="col-3 mt-2">
                                <p class="fs-4">Medicamento</p>
                            </div>
                            <div class="col align-self-center">
                                <select class="form-select" aria-label=".form-select-sm example" name="medicamento">
                                    @foreach ($medicamentos as $medicamento)
                                        <option value="{{$medicamento->IdMedicamento }}">{{$medicamento->NombreMedicamento.' - '.$medicamento->Presentacion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row border">
                            <div class="col-3 mt-2">
                                <p class="fs-4">Frecuencia</p>
                            </div>
                            <div class="col align-self-center">
                                <select class="form-select" aria-label=".form-select-sm example" name="frecuencia">
                                    @foreach ($frecuencias as $frecuencia)
                                        <option value="{{$frecuencia->IdFrecuencia  }}">{{$frecuencia->NombreFrecuencia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 mt-2">
                                <p class="fs-4">Cantidad de días</p>
                            </div>
                            <div class="col align-self-center">
                                <select class="form-select" aria-label=".form-select-sm example" name="cantidad">
                                    @for ($i = 1; $i < 30; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Agregar Medicamento
                                </button>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Medicamento</th>
                                <th>Frecuencia</th>
                                <th>Cant. Días</th>
                                <th>Opcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($receta as $item)
                                <tr>
                                    <td>{{$item->NombreMedicamento.' - '.$item->Presentacion}}</td>
                                    <td>{{$item->NombreFrecuencia}}</td>
                                    <td>{{$item->CantidadDias}}</td>
                                    <td>
                                        <a href="{{url('Medico/Receta/Medicamento/Eliminar/'.$item->IdReceta)}}" class="btn btn-danger">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
