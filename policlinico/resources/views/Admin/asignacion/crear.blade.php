@extends('index')
@section('content')
<h1 class="text-center">Nueva Asignacion</h1>
<form action="{{ url('/asignacion')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('asignacion.formulario')

</form>
@endsection
