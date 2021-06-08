@extends('index')
@section('content')
<h1 class="text-center">Nueva Especialidad</h1>
<form action="{{ url('/especialidad')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('especialidades.formulario')

</form>
@endsection
