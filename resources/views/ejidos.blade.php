@extends('layout')

@section('title')
    Ejidos Municipales
@endsection

@section('content')
    <div class="row">
        <div class="col-5 col-md-6 d-flex justify-content-start align-items-center pt-4">
            <h1 class="ms-4">Ejidos Municipales</h1>
        </div>
    </div>
    <hr />

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th colspan="3" class="text-center">Ejidos Municipales</th>
            </tr>
            <tr>
                <th class="text-center">Ubicación</th>
                <th class="text-center">Superficie</th>
                <th class="text-center">Características</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ejidos as $ejido)
                <tr>
                    <td>{{ $ejido['ubicacion'] }}</td>
                    <td>{{ $ejido['superficie'] }} mt<sup>2</sup></td>
                    <td>{{ $ejido['caracteristicas'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection