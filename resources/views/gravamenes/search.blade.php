@extends('layout')
@section('title')
    Gravámenes
@endsection

@section('content')
    <div class="col pt-4">
        <h1>Gravámenes</h1>
        <p class="lead">Buscar por cédula</p>
        <hr />
        <div class="container content-background p-4">
            <form method="POST" action="{{ route('gravamenes.show') }}">
                @csrf
                <div class="form-group mb-4">
                    <label for="owner-ci">Cédula de Identidad</label>
                    <input type="text" class="form-control" name="cedula" id="owner-ci" placeholder="Cédula">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
@endsection