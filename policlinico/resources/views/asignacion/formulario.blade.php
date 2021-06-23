<a href="{{ url('/asignacion') }}" class="btn btn-outline-danger">
    <i class="bi bi-arrow-bar-left"></i>
    Volver
</a>
<div class="form-group">
    <br>
    <h4>Especialidad</h4>
    <select class="form-select" aria-label="Default select example" name="idespecialidad">
        @foreach ($especialidades as $item)
            <option value="{{$item->IdEspecialidad  }}">{{$item->NombreEspecialidad}}</option>
        @endforeach
    </select>
    <br>
    <h4>Medico</h4>
    <select class="form-select" aria-label="Default select example" name="idmedico">
        @foreach ($medicos as $item)
            <option value="{{$item->IdMedico   }}">{{$item->Nombres.' '.$item->Apellidos}}</option>
        @endforeach
    </select>
    <br>
    <button type="submit" class="btn btn-success">
        <i class="bi bi-layer-forward"></i>
        Guardar
    </button>
</div>
