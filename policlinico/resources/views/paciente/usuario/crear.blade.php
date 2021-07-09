<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div id="contenedor" class="p-4" style="border-radius: 20px">
            <h3 class="text-center mb-5">Registro de usuario nuevo</h3>

            <a href="{{ url('/') }}" class="btn btn-outline-danger btn-lg">
                <i class="fas fa-chevron-left"></i>
                Volver
            </a>


            <form class="col-12 pt-2" method="POST" action="{{ route('registro.store')}}">
            @csrf
                <div class="row">
                    <div class="col-2 mb-2">
                        <h4>DNI</h4>
                    </div>
                    <div class="col-4 mb-2">
                        <input type="text" class="form-control" name="DNI">
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 mb-2">
                        <h4>Nombres</h4>
                    </div>
                    <div class="col-4 mb-2">
                        <input type="text" class="form-control" name="Nombres">
                    </div>
                    <div class="col-2 mb-2">
                        <h4>Apellidos</h4>
                    </div>
                    <div class="col-4 mb-2">
                        <input type="text" class="form-control" name="Apellidos">
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 mb-2 mt-3">
                        <h4>Direccion</h4>
                    </div>
                    <div class="col-10 mb-2">
                        <textarea name="" rows="2" class="form-control" name="Direccion"></textarea>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <h4>Telefono</h4>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" name="Telefono">
                    </div>
                    <div class="col text-center mt-1">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio1" value="1">
                            <h4 class="form-check-label" for="inlineRadio1">Mujer</h4>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio2" value="0">
                            <h4 class="form-check-label" for="inlineRadio2">Hombre</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mb-2">
                        <h4>Password</h4>
                    </div>
                    <div class="col mb-2">
                        <input type="password" class="form-control" name="Password">
                    </div>
                </div>
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-save"></i>
                Guardar
            </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
