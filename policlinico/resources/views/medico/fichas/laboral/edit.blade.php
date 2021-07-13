@extends('medico.index')
@section('content')
    <a href="{{url('Medico/Ficha/Experiencia')}}" class="btn btn-outline-danger btn-lg mt-3">
        <i class="fas fa-chevron-left"></i>
        Regresar
    </a>
    <h1 class="display-4 text-center mb-3">
        Editar Experiencia Laboral
    </h1>
    <form action="{{URL('Medico/Ficha/Experiencia/'.$ficha->IdFichaExperiencia)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row mb-2">
                <div class="col-3">
                    <h4>
                        Nombre de la Institución
                    </h4>
                </div>
                <div class="col-6">
                    <h4>
                        <input type="text" class="form-control" name="institucion" value="{{$ficha->Institucion}}">
                    </h4>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <h4>
                        Nombre del Cargo
                    </h4>
                </div>
                <div class="col-6">
                    <h4>
                        <input type="text" class="form-control" name="cargo" value="{{$ficha->Cargo}}">
                    </h4>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <h4 >
                        Año de Inicio
                    </h4>
                </div>
                <div class="col-2">
                    <select class="form-select " name="inicio">
                        @for ($i = 1921; $i <=2021 ; $i++)
                            @if ($ficha->Inicio==$i)
                                <option selected>{{$i}}</option>
                            @else
                                <option>{{$i}}</option>
                            @endif
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <h4>
                        Año de Finalización
                    </h4>
                </div>
                <div class="col-2">
                    <select class="form-select " name="fin">
                        @for ($i = 1921; $i <=2021 ; $i++)
                            @if ($ficha->Fin==$i)
                                <option selected>{{$i}}</option>
                            @else
                                <option>{{$i}}</option>
                            @endif
                        @endfor
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-lg">
                <span style="font-size:1em" >
                    <i class="fas fa-save ml-2"></i>
                </span>
                Guardar Grado
            </a>
        </div>
    </form>
@endsection
