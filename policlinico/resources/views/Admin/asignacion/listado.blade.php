@extends('index')
@section('content')
    <h2 class="text-center">Lista de Asignaciones</h2>
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
                <a href="{{ url('/asignacion/create') }}" class="btn btn-success">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Asignacion
                </a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Especialidad</th>
                <th class="text-center">Medico</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($asignaciones as $item)
                <tr>
                    <th class="text-center">
                        {{ $item->IdEspecialidadMedico}}
                    </th>
                    <td class="text-center">
                        {{ $item->NombreEspecialidad}}
                    </td>
                    <td class="text-center">
                        {{ $item->Nombres.' '.$item->Apellidos}}
                    </td>
                    <td class="text-center">
                        @if ($item->Estado == 1)
                            <span class="badge bg-success"><i class="bi bi-toggle-on"></i> Activo</span>
                        @else
                            <span class="badge bg-danger"><i class="bi bi-toggle-on"></i> Inactivo</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ url('asignacion/'.$item->IdEspecialidadMedico.'/edit') }}">
                            <button class="btn btn-secondary">
                                <i class="bi bi-pencil-fill"></i>
                                Editar
                            </button>
                        </a>
                        <a href="{{ url('asignacion/'.$item->IdEspecialidadMedico) }}">
                            <button class="btn btn-warning">
                                <i class="bi bi-trash-fill"></i>
                                Elimnar
                            </button>
                        </a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $asignaciones->links() }}
    </div>
@endsection
