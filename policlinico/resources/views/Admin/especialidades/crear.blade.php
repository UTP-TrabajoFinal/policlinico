@extends('Admin.index')
@section('content')
    <h1 class="text-center">Nueva Especialidad</h1>
    <form action="{{ route('especialidad.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('Admin.especialidades.formulario')
    </form>
@endsection
