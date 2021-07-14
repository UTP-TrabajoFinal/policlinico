@extends('Admin.index')
@section('content')
    <h2 class="display-3 text-center">Lista de Medicos</h2>
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
                <a href="{{ url('Admin/Medico/create') }}" class="btn btn-success btn-lg">
                    <i class="bi bi-plus-lg"></i>
                    Agregar Medico
                </a>
            </div>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th class="display-6 text-center">DNI</th>
                <th class="display-6 text-center">Medico</th>
                <th class="display-6 text-center">F. Ingreso</th>
                <th class="display-6 text-center">Foto</th>
                <th class="display-6 text-center">Opcion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($medicos as $item)
                <tr class="align-middle">
                    <th class="display-6 text-muted text-center">
                        {{ $item->DNI}}
                    </th>
                    <td class="display-6 text-muted text-center">
                        {{ 'Dr(a) '.$item->Nombres.' '.$item->Apellidos}}
                    </td>
                    <td class="display-6 text-muted text-center">
                        {{ date("j-n-Y", strtotime($item->FechaIngreso)) }}
                    </td>
                    <td class="display-6 text-muted text-center">
                        <figure class="figure">
                            <img src="{{asset($item->URL)}}" class="img-thumbnail" width="150em">
                        </figure>
                    </td>

                    <td class="text-center">
                        <a href="{{ url('medico/'.$item->IdMedico.'/edit') }}">
                            <button class="btn btn-secondary btn-lg">
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
