@extends('Admin.index')
@section('content')
    <div class="row ">
        <div class="col">
            <div class="d-flex flex-row-reverse bd-highlight">
                @if ($msg = Session::get('mensaje'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <p>{{ $msg }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <h2 class="display-3 text-center">Lista de Especialidades</h2>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-auto">
                <a href="{{ route('especialidad.create') }}" class="btn btn-success btn-lg">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Especialidad
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-8 mx-auto">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>
                                <p class="display-6">
                                    <b>Imagen</b>
                                </p>
                            </th>

                            <th>
                                <p class="display-6">
                                   <b>Nombre</b>
                                </p>
                            </th>

                            <th>
                                <p class="display-6">
                                    <b>Opción</b>
                                </p>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($especialidades as $item)
                            <tr class="text-center align-middle">
                                <td>
                                    ​<picture>
                                        <img src="{{ asset($item->foto)}}" class="img-fluid img-thumbnail" width="150em;">
                                      </picture>
                                </td>

                                <td>
                                    <p class="display-6 text-muted">
                                        {{$item->NombreEspecialidad}}
                                    </p>
                                </td>

                                <td>
                                    <a href="{{ url('Admin/especialidad/'.$item->IdEspecialidad.'/edit') }}" class="d-block btn btn-secondary m-4">
                                        <span style="font-size: 1.5em;">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $especialidades->links() }}
    </div>
@endsection
