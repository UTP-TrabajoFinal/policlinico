<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/policlinico/Policlinico/resources/css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="modal-dialog">
        <div class="container">
            <div class="modal-content">
                <div class="col-12 text-center user-img">
                    <img width="150px" src="<?php echo asset("storage/user.png")?>" alt="">
                </div>
                @if ($msg = Session::get('mensaje'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>{{ $msg }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="col-12" method="POST" action="{{ url('/login')}}">
                    @csrf
                    <div class="form-group">
                        <h4>Usuario</h4>
                        <input type="text" class="form-control" name="user">
                        <br>
                        <h4 class="">Contraseña</h4>
                        <input type="password" class="form-control" name="pass">
                        <br>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                        <button type="button" class="btn btn-danger btn-lg">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
