@extends('Admin.index')
@section('content')
    <div class="col pt-3">
        <a href="{{ url('/Admin/Medico') }}" class="btn btn-outline-danger btn-lg">
            <i class="bi bi-arrow-bar-left"></i>
            Volver
        </a>
    </div>
    <h1 class="display-6 text-center">Nuevo Medico</h1>
    <form action="{{ url('/medico')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('Admin.medicos.formulario')
    </form>
@endsection
