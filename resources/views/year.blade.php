@extends('layout')
@section('title')
    Home
@endsection

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-start align-items-center pt-4">
        <h1 class="ms-4">Movimiento de rebaño por año</h1>
    </div>
</div>
<hr />

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="1" rowspan="2" class="table-success text-center align-middle">Leyenda</th>
            <th scope="col" colspan="4" class="table-success text-center">índices</th>
            <th scope="col" rowspan="2" class="table-success text-center align-middle">Observaciones</th>
        </tr>
        <tr>
            <th scope="col">Animales</th>
            <th scope="col">Parición</th>
            <th scope="col">Nacimientos</th>
            <th scope="col">Mortalidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"># - número de animales</td>
            <td scope="row">Toros y Toretes</td>
            <td scope="row">----</td>
            <td scope="row">----</td>
            <td scope="row">3%</td>
            <td scope="row" rowspan="5"></td>
        </tr>
        <tr>
            <td scope="row">UA - unidad animal</td>
            <td scope="row">Vacas</td>
            <td scope="row">75-85%</td>
            <td scope="row">----</td>
            <td scope="row">3%</td>
        </tr>
        <tr>
            <td scope="row">N - nacimientos</td>
            <td scope="row">Novillas</td>
            <td scope="row">80-90%</td>
            <td scope="row">----</td>
            <td scope="row">3%</td>
        </tr>
        <tr>
            <td scope="row">M - mortalidad</td>
            <td scope="row">Mautes y mautas</td>
            <td scope="row">----</td>
            <td scope="row">----</td>
            <td scope="row">3%</td>
        </tr>
        <tr>
            <td scope="row">D - descarte</td>
            <td scope="row">Becerros y becerras</td>
            <td scope="row">----</td>
            <td scope="row">75-90%</td>
            <td scope="row">3-6%</td>
        </tr>
        <tr>
            <td scope="row">VC - venta para cría</td>
        </tr>
        <tr>
            <td scope="row">VB - venta para beneficio</td>
        </tr>
    </tbody>
</table>

<h1>Movimiento de rebaño</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="1">Fecha:</th>
            <th scope="col" colspan="2">Año:</th>
            <th scope="col" colspan="7">Responsable:</th>
        </tr>
        <tr>
            <th scope="col" class="table-success" colspan="3">Inicio de año</th>
            <th scope="col" class="table-success" colspan="5">Durante el año</th>
            <th scope="col" class="table-success" colspan="2">Final de año</th>
        </tr>
        <tr>
            <th scope="col">Tipo de animal</th>
            <th scope="col">#</th>
            <th scope="col">UA (400KG)</th>
            <th scope="col">N</th>
            <th scope="col">M</th>
            <th scope="col">D</th>
            <th scope="col">VC</th>
            <th scope="col">VB</th>
            <th scope="col">#</th>
            <th scope="col">UA final</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td scope="row">{{ $event->tipoAnimal }}</td>
                <td scope="row">{{ $event->cantidadAnimal }}</td>
                <td scope="row">{{ $event->totalUA }}</td>
                <td scope="row">{{ $event->nacimientos }}</td>
                <td scope="row">{{ $event->muertes }}</td>
                <td scope="row">{{ $event->descartes }}</td>
                <td scope="row">{{ $event->venta_cria }}</td>
                <td scope="row">{{ $event->venta_beneficio }}</td>
                <td scope="row">7</td>
                <td scope="row">8</td>
                <td scope="row">9</td>
            </tr>
        @endforeach
        <tr>
            <td scope="row">Toros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Toretes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Vacas en produccion</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Vacas secas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Vacas horras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Novillas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Mautas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Mautes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Becerras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row">Becerros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
            <td scope="row">6</td>
            <td scope="row">7</td>
            <td scope="row">8</td>
            <td scope="row">9</td>
        </tr>
        <tr>
            <td scope="row" class="table-primary">Totales</td>
            <td scope="row" class="table-primary">1</td>
            <td scope="row" class="table-primary">2</td>
            <td scope="row" class="table-primary">3</td>
            <td scope="row" class="table-primary">4</td>
            <td scope="row" class="table-primary">5</td>
            <td scope="row" class="table-primary">6</td>
            <td scope="row" class="table-primary">7</td>
            <td scope="row" class="table-primary">8</td>
            <td scope="row" class="table-primary">9</td>
        </tr>
        <tr>
            <td scope="row" class="table-info">índices de la finca</td>
            <td scope="row" class="table-info">1</td>
            <td scope="row" class="table-info">2</td>
            <td scope="row" class="table-info">3</td>
            <td scope="row" class="table-info">4</td>
            <td scope="row" class="table-info">5</td>
            <td scope="row" class="table-info">6</td>
            <td scope="row" class="table-info">7</td>
            <td scope="row" class="table-info">8</td>
            <td scope="row" class="table-info">9</td>
        </tr>
    </tbody>
</table>
@endsection