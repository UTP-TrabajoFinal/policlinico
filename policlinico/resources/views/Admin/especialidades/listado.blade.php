@extends('Admin.index')
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
                <a href="{{ route('especialidad.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Especialidad
                </a>
            </div>
        </div>

        <table class="table">
            <thead class="text-center">
              <tr >
                <th >#</th>
                <th >Nombre</th>
                <th >Ultima Modificacion</th>
                <th >Imagen</th>
                <th >Opcion</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($especialidades as $item)
                <tr>
                    <td >
                        {{ $item->IdEspecialidad}}
                    </td>
                    <td >{{ $item->NombreEspecialidad}}</td>
                    <td >{{ $item->created_at->diffForHumans() }}</td>
                    <td >
                        <img width="100px" src="{{ asset($item->foto)}}" alt="">
                    </td>
                    <td >
                        <a href="{{ url('especialidad/'.$item->IdEspecialidad.'/edit') }}">
                            <button class="btn btn-secondary">
                                <span>
                                    <i class="bi bi-pencil-fill"></i>
                                    Editar
                                </span>
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
