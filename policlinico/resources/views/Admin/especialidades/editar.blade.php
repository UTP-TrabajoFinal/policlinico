@extends('Admin.index')
@section('content')
    <div class="col pt-3">
        <a href="{{ url('/Admin/especialidad') }}" class="btn btn-outline-danger btn-lg">
            <i class="bi bi-arrow-bar-left"></i>
            Volver
        </a>
    </div>
    <h1 class="display-3 text-center">Editar Especialidad</h1>
    <form action="{{ url('especialidad/'.$especialidad->IdEspecialidad) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('Admin.especialidades.formulario')
    </form>
@endsection
