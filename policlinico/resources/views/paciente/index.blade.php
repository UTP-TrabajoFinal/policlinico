<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Policlinico</title>
    </head>
    <body>
        <div class="d-flex" id="menu">
            <div class="p-2 bd-highlight" id="menu-izquierdo">
                <div class="text-center">
                    <h3>Policlinico</h3>
                    <img src="{{asset('storage\logo.png')}}" alt="" width="300px" class="text-center">
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-id-card p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{url('perfil/'.Session::get('IdusuarioLogueado').'/edit')}}" class="d-block text-decoration-none px-2 mb-2" id="item">
                            Datos Personales
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-user-injured p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{url('usuario/'.Session::get('IdusuarioLogueado').'/edit')}}" class="d-block text-decoration-none px-3 mb-2" id="item">Usuario</a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="far fa-calendar-check p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{url('paciente/cita/'.Session::get('IdusuarioLogueado'))}}" class="d-block text-decoration-none mb-2 px-3" id="item">Cita Medica</a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-door-open p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{route('admin.show','0')}}" class="d-block text-decoration-none mb-2 px-1" id="item">
                            Cerrar Sesión
                        </a>
                    </h3>
                </div>
            </div>
            <div class="align-self-start" id="menu-derecho">
                <div class="row">
                    <div class="col-6">
                        <h2>
                            Bienvenido:
                            <b class="text-uppercase">
                                {{ $paciente->Nombres.' '.$paciente->Apellidos}}
                            </b>
                        </h2>
                    </div>
                    <div class="col"></div>
                    <div class="col-3">
                        <h2>
                            Rol:
                            <b class="text-uppercase">
                                Paciente
                            </b>
                        </h2>
                    </div>
                </div>
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
