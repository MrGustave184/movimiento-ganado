@extends('layout')
@section('title')
    Gravámenes
@endsection

@section('content')
    <div class="row">
        <div class="col-5 col-md-4">
            <img src="{{ url('/img/logo.png') }}">
        </div>
        <div class="col-5 col-md-6 d-flex justify-content-start align-items-center pt-4">
            <h1 class="ms-4">Gravámenes</h1>
        </div>
    </div>
    <hr />

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th colspan="3" class="text-center">Gravámenes</th>
            </tr>
            <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Cédula</th>
                <th class="text-center">Solvente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $data['nombre'] }}</th>
                <td>{{ $data['cedula'] }}</td>
                <td>{{ $data['solvente'] }}</td>
            </tr>
        </tbody>
    </table>

    <p>Se expide a petición de la parte interesada.</p>
    <p>Fecha de expedición: {{ $data['date']->day }}/{{ $data['date']->month }}/{{ $data['date']->year }}</p>
@endsection