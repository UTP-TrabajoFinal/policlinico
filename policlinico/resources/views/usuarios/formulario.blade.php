<a href="{{ url('/usuario') }}" class="btn btn-outline-danger">
    <i class="bi bi-arrow-bar-left"></i>
    Volver
</a>
<div class="form-group">
    <br>
    <h4>Usuario</h4>
    <input
        type="text"
        class="form-control"
        placeholder="Ingrese Usuario"
        name="usuario"
        value="{{ isset($usuario->Usuario)?$usuario->Usuario:'' }}">

    <h4>Password</h4>
    <input
        type="password"
        class="form-control"
        placeholder="Ingrese Contraseña"
        name="password"
        value="{{isset($pass)?$pass:''}}">
    <h4>Tipo de Usuario</h4>
    <select class="form-select" aria-label="Default select example" name="idtipousuario">
        @if (isset($usuario))
            @foreach ($tipousuario as $item)
                @if ($item->IdTipoUsuario==$usuario->IdTipoUsuario)
                    <option value="{{$item->IdTipoUsuario }}" selected>{{$item->TipoUsuario}}</option>
                @else
                    <option value="{{$item->IdTipoUsuario }}">{{$item->TipoUsuario}}</option>
                @endif
            @endforeach
        @else
            @foreach ($tipousuario as $item)
                <option value="{{$item->IdTipoUsuario }}">{{$item->TipoUsuario}}</option>
            @endforeach
        @endif

    </select>
    <br>
    <button type="submit" class="btn btn-success">
        <i class="bi bi-layer-forward"></i>
        Guardar
    </button>
</div>
