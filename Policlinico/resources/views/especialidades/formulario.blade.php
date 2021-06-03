@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
<a href="{{ url('/especialidad') }}" class="btn btn-outline-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
      </svg>
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
    <h4>Descripcion</h4>
    <textarea
        class="form-control"
        rows="3"
        name="Descripcion">
{{ isset($especialidad->Descripcion)?$especialidad->Descripcion:''}}
    </textarea><br>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
