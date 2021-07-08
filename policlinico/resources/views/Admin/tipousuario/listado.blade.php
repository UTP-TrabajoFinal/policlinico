@extends('index')
@section('content')
    <h2 class="text-center">Lista de Tipo de Usuario</h2>
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
                <a href="{{ url('/especialidad/create') }}" class="btn btn-success">Agregar Tipo de Usuario</a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo Usuario</th>
                <th scope="col" class="text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $item)
                <tr>
                    <th scope="row">{{ $item->IdTipoUsuario }}</th>
                    <td>{{ $item->TipoUsuario}}</td>
                    <td class="text-center">
                        <a href="">
                            <button class="btn btn-secondary">Editar</button>
                        </a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>

    </div>
    <div class="d-flex justify-content-center">
        {{ $tipos->links() }}
    </div>
@endsection
