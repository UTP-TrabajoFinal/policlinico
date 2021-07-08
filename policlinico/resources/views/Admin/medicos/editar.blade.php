@extends('index')
@section('content')
    <h1 class="text-center">Editar Medico</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('medicos.formulario')
    </form>
@endsection
