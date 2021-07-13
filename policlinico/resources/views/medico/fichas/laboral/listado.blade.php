@extends('medico.index')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <h1 class="display-4 text-center mt-3">
        Ficha de Experiencia Laboral
    </h1>
    <div class="row mb-4">
        <div class="col">
            <div class="d-flex justify-content-end">
                <a href="{{url('Medico/Ficha/Experiencia/create')}}" class="btn btn-success btn-lg">
                    <i class="fas fa-plus"></i>
                    Agregar Experiencia Laboral
                </a>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>
                            <h1 class="h3">
                                <b>Institución</b>
                            </h1>
                        </th>
                        <th>
                            <h1 class="h3">
                                <b>Cargo</b>
                            </h1>
                        </th>
                        <th>
                            <h1 class="h3">
                                <b>Duración</b>
                            </h1>
                        </th>
                        <th>
                            <h1 class="h3">
                                <b>Opción</b>
                            </h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ficha as $item)
                        <tr class="text-center align-middle">
                            <td class="text-uppercase">
                                <h3 class="h4 text-muted">
                                    {{$item->Institucion}}
                                </h3>
                            </td>
                            <td class="text-uppercase">
                                <h3 class="h4 text-muted">
                                    {{$item->Cargo}}
                                </h3>
                            </td>
                            <td class="text-uppercase">
                                <h3 class="h4 text-muted">
                                    {{$item->Inicio.' - '.$item->Fin}}
                                </h3>
                            </td>
                            <td>
                                <div class="col align-self-center">
                                    <a href="{{url('Medico/Ficha/Experiencia/'.$item->IdFichaExperiencia.'/edit')}}" class="btn btn-secondary btn-lg m-2 px-4">
                                        <span>
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        Editar
                                    </a>
                                </div>

                                <div class="col align-self-center">
                                    <form action="{{route('medico.fichaexperiencia.destroy',$item->IdFichaExperiencia)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-lg m-2" type="sui">
                                            <span>
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
