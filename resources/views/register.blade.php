@extends('layout')
@section('title')
    Registrar Propiedad
@endsection

@section('content')
    <div class="col pt-4">
        @isset($message)
            <div class="col-12 text-center pt-4">
                <div class="alert alert-primary" role="alert">
                    {{ $message }}
                </div>
            </div>
        @else
            <h1>Registrar</h1>
        @endisset

        <hr />
        <div class="content-background p-4 row">
            <form method="POST" action="{{ route('createEvent') }}">
                <div class="col d-flex justify-content-center"><h2>Registrar evento</h2></div>
                <div class="form-group mb-4 row">
                    <div class="col-12 col-md-4">
                        <label for="tipo-animal">Tipo de animal</label>
                        <select name="tipo-animal" id="tipo-animal" class="form-select" aria-label="Seleccionar tipo de animal" required>
                            <option value="0" selected>Toro</option>
                            <option value="1">Torete</option>
                            <option value="2">Vaca en producción</option>
                            <option value="3">Vaca seca</option>
                            <option value="4">Vaca horra</option>
                            <option value="5">Novilla</option>
                            <option value="6">Mauta</option>
                            <option value="7">Maute</option>
                            <option value="8">Becerra</option>
                            <option value="9">Becerro</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="unidad-animal">Unidad animal (400 KG)</label>
                        <input name="unidad-animal" step="0.01" min="0" type="number" class="form-control" id="unidad-animal" required>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="tipo-animal">Evento</label>
                        <select name="evento" id="evento" class="form-select" aria-label="Seleccionar evento" required>
                            <option value="0" selected>Nacimiento</option>
                            <option value="1">Muerte</option>
                            <option value="2">Descarte</option>
                            <option value="3">venta para cría</option>
                            <option value="4">venta para beneficio</option>
                        </select>
                    </div>
                </div>
                
                @csrf
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
@endsection