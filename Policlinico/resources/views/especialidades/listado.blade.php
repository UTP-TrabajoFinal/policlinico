@extends('layout')
@section('content')
    <h2 class="text-center">Lista de Especialidades</h2>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-auto">
                <button class="btn btn-success">Agregar Especialidad</button>
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
                        <button class="btn btn-secondary">Editar</button>
                        <button class="btn btn-primary">Ver</button>
                    </td>
                  </tr>

              @endforeach
            </tbody>
          </table>
    </div>


@endsection
