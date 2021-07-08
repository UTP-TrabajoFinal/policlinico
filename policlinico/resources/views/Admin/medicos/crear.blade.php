@extends('index')
@section('content')
<h1 class="text-center">Nueva Medico</h1>
<form action="{{ url('/medico')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('medicos.formulario')
</form>
@endsection
