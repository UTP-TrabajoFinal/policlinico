<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Policlinico</title>
    </head>
    <body>
        <div class="d-flex" id="menu">
            <div class="p-2 bd-highlight" id="menu-izquierdo">
                <div class="text-center">
                    <h3>Policlinico</h3>
                    <img src="{{asset('storage\logo.png')}}" alt="" width="150px" class="text-center">
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="bi bi-file-person-fill p-2" id="icono"></i>
                    <h3>
                        <a href="{{route('registro.edit',Session::get('IdusuarioLogueado'))}}" class="d-block text-decoration-none" id="item">Datos Personales</a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="bi bi-file-earmark-person p-2" id="icono"></i>
                    <h3>
                        <a href="" class="d-block text-decoration-none" id="item">Usuario</a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="bi bi-file-medical-fill p-2" id="icono"></i>
                    <h3>
                        <a href="" class="d-block text-decoration-none" id="item">Cita Medica</a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                    <h3>
                        <a href="{{route('admin.show','0')}}" class="d-block text-decoration-none" id="item">Cerrar Sesion</a>
                    </h3>
                </div>
            </div>
            <div class="align-self-start" id="menu-derecho">
                <div class="row">
                    <h2>
                        Bienvenido:
                        <b>
                            {{ Session::get('usuarioLogueado') }}
                        </b>
                    </h2>
                    <h2>
                        Rol:
                        <b>
                            Paciente
                        </b>
                    </h2>
                </div>
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
