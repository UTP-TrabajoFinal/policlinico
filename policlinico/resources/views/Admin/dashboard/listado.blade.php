@extends('Admin.index')
@section('content')
    <h1 class="display-4 text-center">Lista de Reportes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>
                    <p class="h3">Reporte</p>
                </th>
                <th>
                    <p class="h3">Descripcion</p>
                </th>
                <th>
                    <p class="h3">Opcion</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p class="h3">Citas Registradas</p>
                </td>
                <td>
                    <p class="h3">Cantidad Total de citas regritradas</p>
                </td>
                <td>
                    <a href="" class="btn btn-success">
                        Ver Reporte
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="h3">Especialidad por citas</p>
                </td>
                <td>
                    <p class="h3">Total de Citas registradas por Especialidad</p>
                </td>
                <td>
                    <a href="" class="btn btn-success">
                        Ver Reporte
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
