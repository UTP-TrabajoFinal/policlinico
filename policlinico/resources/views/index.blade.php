<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/policlinico/Policlinico/resources/css/style.css">
    <title>Policlinico</title>
  </head>
  <body>
      <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold">Policlinico</h4>
            </div>
            <div class="menu">
                <a href="{{url('especialidad')}}" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-hr m-2 lead"></i>
                    Especialidad
                </a>
                <a href="{{url('medico')}}" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-person-badge m-2 lead"></i>
                    Medicos
                </a>
                <a href="{{ url('asignacion')}}" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-tags m-2 lead"></i>
                    Asignacion de Especialidades
                </a>
                <a href="{{url('usuario')}}" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-person-badge m-2 lead"></i>
                    Usuarios
                </a>
                <a href="{{url('tipousuario')}}" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-person-badge m-2 lead"></i>
                    Tipo de Usuarios
                </a>
                <a href="" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-person-badge m-2 lead"></i>
                    Pacientes
                </a>
                <a href="" class="d-block text-light text-decoration-none p-2">
                    <i class="bi bi-person-badge m-2 lead"></i>
                    Cita
                </a>
            </div>
        </div>
        <div class="w-100">
            <br>
            <div class="container">
                @yield('content')
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
