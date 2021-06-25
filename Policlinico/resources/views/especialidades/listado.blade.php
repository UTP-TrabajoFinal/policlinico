@extends('index')
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
                <a href="{{ url('/especialidad/create') }}" class="btn btn-success">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Especialidad
                </a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Descripcion</th>
                <th class="text-center">Ultima Modificacion</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($especialidades as $item)
                <tr>
                    <th class="text-center">{{ $item->IdEspecialidad}}</th>
                    <td class="text-center">{{ $item->NombreEspecialidad}}</td>
                    <td class="text-center">{{ $item->Descripcion}}</td>
                    <td class="text-center">{{ $item->created_at->diffForHumans() }}</td>
                    <td class="text-center">
                        <img width="100px" src="{{'../public'.$item->foto}}" alt="">
                    </td>
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
        {{ $especialidades->links() }}
    </div>
@endsection
