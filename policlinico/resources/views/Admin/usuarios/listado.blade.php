@extends('index')
@section('content')
    <h2 class="text-center">Lista de Usuarios</h2>
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
                <a href="{{ url('/usuario/create') }}" class="btn btn-success">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Usuario
                </a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th class="text-center">Usuario</th>
                <th class="text-center">T. Usuario</th>
                <th class="text-center">F. Modificacion</th>
                <th class="text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $item)
                <tr>
                    <th class="text-center">{{ $item->Usuario}}</th>
                    <td class="text-center">{{ $item->TipoUsuario }}</td>
                    <td class="text-center">{{ $item->created_at->diffForHumans(now()) }}</td>
                    <td class="text-center">
                        <a href="{{ url('usuario/'.$item->IdUsuario.'/edit') }}">
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
        {{ $usuarios->links() }}
    </div>
@endsection
