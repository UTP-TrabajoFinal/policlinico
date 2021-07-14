@extends('Admin.index')
@section('content')
    <h1 class="display-4 text-center">Citas Registradas</h1>
        @foreach ($citas as $item)
            <p class="display-6"></p>
            {{$item->NombreEspecialidad}}
        @endforeach
@endsection
