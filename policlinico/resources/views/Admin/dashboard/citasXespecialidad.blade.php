@extends('Admin.index')
@section('content')
    <h1 class="display-4 text-center">Citas Registradas</h1>
        @foreach ($citas as $item)
            <p class="display-6">
                {{$item->NombreEspecialidad}}
            </p>
            <p class="display-6">
                {{$item->Cantidad}}
            </p>
        @endforeach
@endsection
