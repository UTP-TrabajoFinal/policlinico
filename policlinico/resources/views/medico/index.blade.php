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
                    <img src="{{asset('storage\logo.png')}}" alt="" width="150px" class="text-center">
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-id-card p-2 align-self-center" id="icono"></i>
                    <h3 >
                        <a href="{{url('Medico/Registro/'.$medico->IdMedico.'/edit')}}" class="d-block text-decoration-none mb-2" id="item">
                            Datos Personales
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-user-md p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{ url('Medico/Usuario/'.session()->get('IdusuarioLogueado').'/edit ') }}" class="d-block text-decoration-none px-3" id="item">
                            Usuario
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="far fa-clipboard p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{ url('Medico/Usuario/'.session()->get('IdusuarioLogueado').'/edit ') }}" class="d-block text-decoration-none px-4 mb-2" id="item">
                            Ficha Laboral
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-user-graduate p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{ url('Medico/Ficha/Grado') }}" class="d-block text-decoration-none px-4 mb-2" id="item">
                            Ficha Grados
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-user-tag p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{url('Medico/Asignacion')}}" class="d-block text-decoration-none px-1" id="item">
                            Especialidades
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="far fa-calendar-check p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{url('Medico/Cita')}}" class="d-block text-decoration-none px-3 mb-2" id="item">
                            Citas Programadas
                        </a>
                    </h3>
                </div>

                <div class="d-flex align-items-start" id="sub-menu">
                    <i class="fas fa-door-open p-2 align-self-center" id="icono"></i>
                    <h3>
                        <a href="{{route('admin.show','0')}}" class="d-block text-decoration-none mb-2 px-1" id="item">
                            Cerrar Sesion
                        </a>
                    </h3>
                </div>
            </div>
            <div class="align-self-start" id="menu-derecho">
                <div class="row">
                    <div class="col-5">
                        <h2>
                            Bienvenido:
                            <b>
                                {{ $medico->Nombres.' '.$medico->Apellidos}}
                            </b>
                        </h2>
                    </div>
                    <div class="col"></div>
                    <div class="col-3 right">
                        <h2>
                            Rol:
                            <b>
                            Medico
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
