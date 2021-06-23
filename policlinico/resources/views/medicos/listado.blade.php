@extends('index')
@section('content')
    <h2 class="text-center">Lista de Medicos</h2>
    <div class="container">
        @if ($msg = Session::get('mensaje'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{ $msg }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col"></div>
            <div class="col-auto">
                <a href="{{ url('/medico/create') }}" class="btn btn-success">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Medico
                </a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th class="text-center">DNI</th>
                <th class="text-center">Nombres</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">F. Ingreso</th>
                <th class="text-center">Foto</th>
                <th class="text-center">F. Modificacion</th>
                <th class="text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($medicos as $item)
                <tr>
                    <th class="text-center">{{ $item->DNI}}</th>
                    <td class="text-center">{{ $item->Nombres}}</td>
                    <td class="text-center">{{ $item->Apellidos}}</td>
                    <td class="text-center">{{ $item->FechaIngreso }}</td>
                    <td class="text-center">
                        <img width="100px" src="{{'../public'.$item->URL}}" alt="">
                    </td>
                    <td class="text-center">{{ $item->updated_at->diffForHumans() }}</td>
                    <td class="text-center">
                        <a href="{{ url('especialidad/'.$item->IdEspecialidad.'/edit') }}">
                            <button class="btn btn-secondary">
                                <i class="bi bi-pencil-fill"></i>
                                Editar
                            </button>
                        </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

    </div>
    <div class="d-flex justify-content-center">

    </div>
@endsection
