<a href="{{ url('/especialidad') }}" class="btn btn-outline-danger">
    <i class="bi bi-arrow-bar-left"></i>
    Volver
</a>
<div class="form-group">
    <br>
    <h4>Especialidad</h4>
    <input
        type="text"
        class="form-control"
        placeholder="Ingrese Categoria"
        name="NombreEspecialidad"
        value="{{ isset($especialidad->NombreEspecialidad)?$especialidad->NombreEspecialidad:'' }}">
        {!! $errors->first('NombreEspecialidad','<span class=alertas>:message</span>')!!}

    <h4>Descripcion</h4>
    <textarea
        class="form-control"
        name="Descripcion">{{isset($especialidad->Descripcion)?$especialidad->Descripcion:''}}</textarea>
        {!! $errors->first('Descripcion','<span class=alertas>:message</span>')!!}

    <h4>Foto</h4><br>
    @isset($especialidad)
        <img width="300px" src="{{url($especialidad->foto)}}" alt="">
        <br><br>
    @endisset

    <input type="file" name="foto" id="foto">
    <br><br>
    <button type="submit" class="btn btn-success">
        <i class="bi bi-layer-forward"></i>
        Guardar
    </button>
</div>
