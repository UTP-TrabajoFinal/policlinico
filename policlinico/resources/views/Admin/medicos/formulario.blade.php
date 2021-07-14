<div class="row">
    <div class="col-8 mx-auto">
        <div class="form-group">
             <h1 class="display-6">DNI</h1>
            <input
                type="text"
                class="form-control"
                placeholder="Ingrese DNI"
                name="DNI"
                value="{{ isset($medicos)?$medicos->DNI:'' }}">

            <h1 class="display-6">Nombres</h1>
            <input
                type="text"
                class="form-control"
                placeholder="Ingrese Nombres"
                name="Nombres"
                value="{{ isset($medicos)?$medicos->Nombres:'' }}">

            <h1 class="display-6">Apellidos</h1>
            <input
                type="text"
                class="form-control"
                placeholder="Ingrese Apellidos"
                name="Apellidos"
                value="{{ isset($medicos)?$medicos->Apellidos:'' }}">
            <h1 class="display-6">Fecha de Ingreso</h1>
            <input name="fecha" type="date" class="form-control">
            <h1 class="display-6">Foto</h1>
            @isset($medicos)
                <img width="300px" src="{{url($medicos->URL)}}">
            @endisset
            <input type="file" name="foto" id="foto" class="form-control mb-4">
            <button type="submit" class="btn btn-success btn-lg">
                <i class="fas fa-save"></i>
                Guardar
            </button>
        </div>
    </div>
</div>
