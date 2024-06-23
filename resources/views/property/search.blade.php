@extends('layout')
@section('title')
    Registrar Propiedad
@endsection

@section('content')
    <div class="col pt-4">
        <h1>Buscar propietarios</h1>
        <p class="lead">App para registro de propiedades</p>
        <hr />
        <div class="container content-background p-4">
            <form method="POST" action="{{ route('property.searchByCI') }}">
                @csrf
                <label for="owner-ci">Cédula de Identidad</label>
                <div class="input-group mb-4 mt-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">V-</div>
                    </div>
                    <input type="text" name="cedula" class="form-control" id="owner-ci" placeholder="Cédula">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
@endsection