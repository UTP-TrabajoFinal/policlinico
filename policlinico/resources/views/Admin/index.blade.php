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
            <div class="text-center m-3" id="logo">
                <img src="{{asset('storage\logo.png')}}" alt="" width="300px" class="text-center">
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-filter"></i>
                </span>
                <h3>
                    <a href="{{url('Admin/especialidad')}}" class="d-block text-decoration-none mt-2 mx-3" id="item">
                        Especialidades
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-user-md"></i>
                </span>
                <h3>
                    <a href="{{url('Admin/Medico')}}" class="d-block text-decoration-none mt-2 mx-3" id="item">
                        Medicos
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-user"></i>
                </span>
                <h3>
                    <a href="" class="d-block text-decoration-none mt-2 mx-3" id="item">
                        Usuarios
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-user-friends"></i>
                </span>
                <h3>
                    <a href="" class="d-block text-decoration-none mt-2" id="item">
                        Tipo de Usuarios
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-capsules"></i>
                </span>
                <h3>
                    <a href="" class="d-block text-decoration-none mt-2 mx-2" id="item">
                        Medicamentos
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-history"></i>
                </span>
                <h3>
                    <a href="" class="d-block text-decoration-none mt-2 mx-2" id="item">
                        Frecuencia
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-chart-bar"></i>
                </span>
                <h3>
                    <a href="{{url('Admin/Dashboard')}}" class="d-block text-decoration-none mt-2 mx-2" id="item">
                        DashBoard
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <span style="font-size: 2em" class="m-3">
                    <i class="fas fa-door-open"></i>
                </span>
                <h3>
                    <a href="{{route('admin.show','0')}}" class="d-block text-decoration-none mt-2 " id="item">
                        Cerrar Sesión
                    </a>
                </h3>
            </div>
        </div>
        <div class="align-self-start" id="menu-derecho">
            <h2>
                Bienvenido:
                <b>
                    {{ Session::get('usuarioLogueado') }}
                </b>
            </h2>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
