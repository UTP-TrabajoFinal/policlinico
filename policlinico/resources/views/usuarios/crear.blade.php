@extends('index')
@section('content')
<h1 class="text-center">Nueva Usuario</h1>
<form action="{{ url('/usuario')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('usuarios.formulario')
</form>
@endsection
