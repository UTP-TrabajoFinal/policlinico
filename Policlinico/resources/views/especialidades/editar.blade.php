@extends('index')
@section('content')
    <h1 class="text-center">Editar Especialidad</h1>
    <form action="{{ url('especialidad/'.$especialidad->IdEspecialidad) }}" method="POST">
    @csrf
    {{ method_field('PATCH') }}
    @include('especialidades.formulario')
    </form>
@endsection
