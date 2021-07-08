@extends('medico.index')
@section('content')
    <div class="row pb-3">
        <div class="col-8 text-center">
            <h1>Asignacion de especialidades</h1>
        </div>
    </div>
    <div class="row" >
        <div class="col-8">
            <form action="{{route('medico.asignacion.store')}}" method="POST">
                @csrf
                <div >
                    <h3>
                        <strong>Medico </strong>
                        {{$medico->Nombres.' '.$medico->Apellidos}}
                    </h3>
                    <br>
                    <h3>Especialidades</h3>
                    <select name="idespecialidad" class="form-select form-select-lg mb-3">
                        @foreach ($especialidades as $item)
                            <option value="{{$item->IdEspecialidad }}">{{$item->NombreEspecialidad}}</option>
                        @endforeach
                    </select>
                    <div class="row">
                        <div class="col-3">
                            <h3>Fecha de Inicio</h3>
                        </div>
                        <div class="col-3">
                            <input type="time" class="form-control mb-3" min="08:00" max="20:00" value="08:00" name="inicio">
                        </div>
                        <div class="col-3">
                            <h3>Fecha de Fin</h3>
                        </div>
                        <div class="col-3">
                            <input type="time" class="form-control mb-3" min="08:00" max="20:00" value="08:00" name="fin">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
