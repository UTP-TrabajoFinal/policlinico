@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
<a href="{{ url('/medico') }}" class="btn btn-outline-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
      </svg>
    Volver
</a>
<div class="form-group">
    <br>

    <h4>DNI</h4>
    <input
        type="text"
        class="form-control"
        placeholder="Ingrese DNI"
        name="DNI"
        value="">

    <h4>Nombres</h4>
    <input
        type="text"
        class="form-control"
        placeholder="Ingrese Nombres"
        name="Nombres"
        value="">

    <h4>Apellidos</h4>
    <input
        type="text"
        class="form-control"
        placeholder="Ingrese Apellidos"
        name="Apellidos"
        value="">
    <h4>Fecha de Ingreso</h4>
    <input name="fecha" type="date" class="form-control">
    <h4>Foto</h4><br>
    @isset($medico)
        <img width="300px" src="{{url($medico->foto)}}" alt="">
        <br><br>
    @endisset
    <input type="file" name="foto" id="foto" class="form-control-file">
    <br><br>
    <select class="form-select" aria-label="Default select example" name="idusuario">
        @foreach ($usuarios as $item)
                <option value="{{$item->IdUsuario  }}">{{$item->Usuario}}</option>
        @endforeach
    </select>
    <br>
    <button type="submit" class="btn btn-success">
        <i class="bi bi-layer-forward"></i>
        Guardar
    </button>
</div>
