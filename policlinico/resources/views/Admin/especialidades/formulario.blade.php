

<div class="row">
    <div class="col-8 mx-auto">
        <div class="form-group">
            <br>
            <h1 class="display-6">Especialidad</h1>
            <input
                type="text"
                class="form-control mb-2"
                placeholder="Ingrese Categoria"
                name="NombreEspecialidad"
                value="{{ isset($especialidad)?$especialidad->NombreEspecialidad:'' }}">
                {!! $errors->first('NombreEspecialidad','<span class=alertas>:message</span>')!!}

            <h1 class="display-6">Foto</h1>
            @isset($especialidad)
                <img width="300px" src="{{url($especialidad->foto)}}" alt="">
                <br><br>
            @endisset

            <input type="file" name="foto" class="form-control">
            <br><br>
            <button type="submit" class="btn btn-success btn-lg">
                <i class="fas fa-save"></i>
                Guardar
            </button>
        </div>
    </div>
</div>
