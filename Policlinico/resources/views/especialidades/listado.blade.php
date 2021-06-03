@extends('layout')
@section('content')
    <h2 class="text-center">Lista de Especialidades</h2>
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
                <a href="{{ url('/especialidad/create') }}" class="btn btn-success">Agregar Especialidad</a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col" class="text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($especialidades as $item)
                <tr>
                    <th scope="row">{{ $item->IdEspecialidad}}</th>
                    <td>{{ $item->NombreEspecialidad}}</td>
                    <td>{{ $item->Descripcion}}</td>
                    <td class="text-center">
                        <a href="{{ url('especialidad/'.$item->IdEspecialidad.'/edit') }}">
                            <button class="btn btn-secondary">Editar</button>
                        </a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>

    </div>
    <div class="container">
        <span>
            {{ $especialidades->links() }}
         </span>
    </div>
@endsection
