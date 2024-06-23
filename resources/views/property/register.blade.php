@extends('layout')
@section('title')
    Registrar Propiedad
@endsection

@section('content')
    <div class="col pt-4">
        <h1>Registrar</h1>
        <hr />
        <div class="content-background p-4 row">
            <form method="POST" action="{{ route('property.create') }}">
                <div class="col d-flex justify-content-center"><h2>Encabezado</h2></div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" name="encabezado" id="" cols="30" rows="10"></textarea>
                    </div>
                <div class="col d-flex justify-content-center"><h2>Datos del propietario</h2></div>
                <div class="form-group mb-4">
                    <label for="exampleInputEmail1">Nombre del propietario</label>
                    <input type="text" class="form-control" name="nombre" id="owner-name" aria-describedby="emailHelp" placeholder="Nombre">
                </div>
                <label for="owner-ci">Cédula de Identidad</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">V-</div>
                    </div>
                    <input type="number" name="cedula" class="form-control" id="owner-ci" placeholder="Cédula">
                </div>
                <div class="col d-flex justify-content-center"><h2>Medidas y linderos particulares del terrero</h2></div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="norte">Norte</label>
                        <input name="medida_norte" type="text" class="form-control" id="norte">
                    </div>
                    <div class="col-4">
                        <label for="norte-ml">ML</label>
                        <input name="norte_ml" step="0.01" min="0" type="number" class="form-control" id="norte-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="sur">Sur</label>
                        <input type="text" name="medida_sur" class="form-control" id="sur">
                    </div>
                    <div class="col-4">
                        <label for="sur-ml">ML</label>
                        <input type="number" name="sur_ml" step="0.01" min="0" class="form-control" id="sur-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="este">Este</label>
                        <input type="text" name="medida_este" class="form-control" id="este">
                    </div>
                    <div class="col-4">
                        <label for="este-ml">ML</label>
                        <input type="number" name="este_ml" step="0.01" min="0" class="form-control" id="este-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="oeste">Oeste</label>
                        <input type="text" name="medida_oeste" class="form-control" id="oeste">
                    </div>
                    <div class="col-4">
                        <label for="oeste-ml">ML</label>
                        <input type="number" name="oeste_ml" step="0.01" min="0" class="form-control" id="oeste-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <label for="area-aprox">área aproximada del terreno en m<sup>2</sup></label>
                    <div class="col-6 col-md-4 col-lg-2">
                        <input type="number" name="area" class="form-control" id="area-aprox" col="3">
                    </div>
                </div>
                <div class="col d-flex justify-content-center"><h2>Código Catastral</h2></div>
                <div class="form-group mb-4">
                    <input type="text" name="codigo_catastral" class="form-control" id="codigo-catastral">
                </div>

                @csrf
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
@endsection