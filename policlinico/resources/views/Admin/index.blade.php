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
            <div class="text-center" id="logo">
                <h3>Policlinico</h3>
                <img src="{{asset('storage\logo.png')}}" alt="" width="300px" class="text-center">
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="{{url('Admin/especialidad')}}" class="d-block text-decoration-none" id="item">Especialidades</a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="" class="d-block text-decoration-none" id="item">
                        Medicos
                    </a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="" class="d-block text-decoration-none" id="item">Usuarios</a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="" class="d-block text-decoration-none" id="item">Tipo de Usuarios</a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="" class="d-block text-decoration-none" id="item">Medicamentos</a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="" class="d-block text-decoration-none" id="item">Frecuencia</a>
                </h3>
            </div>

            <div class="d-flex align-items-start" id="sub-menu">
                <i class="bi bi-box-arrow-left p-2" id="icono"></i>
                <h3>
                    <a href="{{url('Admin/Dashboard')}}" class="d-block text-decoration-none" id="item">DashBoard</a>
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
