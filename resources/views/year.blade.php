@extends('layout')
@section('title')
    Home
@endsection

@section('content')
<div id="download">
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
<div class="row">
    <div class="col-12 d-flex justify-content-end align-items-center mb-3">
        <button id="btn-download" class="btn btn-success">descargar</button>
    </div>
</div>
<table class="table table-bordered" id="tabla-movimiento">
    <thead>
        <tr>
            <th scope="col" colspan="1">Fecha:</th>
            <th scope="col" colspan="2">Año: {{ $year }}</th>
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
        @php
            $baseIndiceNacimientos = 0;
        @endphp

        @foreach($events as $event)
            @php
                if ($event->tipoAnimal == 'Vacas horras' || $event->tipoAnimal == 'Novillas') {
                    $baseIndiceNacimientos += $event->cantidad;
                }
            @endphp
            <tr>
                <td scope="row">{{ $event->tipoAnimal }}</td>
                <td scope="row">{{ $event->cantidad }}</td>
                <td scope="row">{{ $event->UAinicial }}</td>
                <td scope="row">{{ $event->nacimientos }}</td>
                <td scope="row">{{ $event->muertes }}</td>
                <td scope="row">{{ $event->descartes }}</td>
                <td scope="row">{{ $event->venta_cria }}</td>
                <td scope="row">{{ $event->venta_beneficio }}</td>
                <td scope="row">{{ $event->cantidadFinal }}</td>
                <td scope="row">{{ $event->UAfinal }}</td>
            </tr>
        @endforeach

        <tr>
            <td scope="row" class="table-primary">Totales</td>
            <td scope="row" class="table-primary">{{ $totals->totalAnimales }}</td>
            <td scope="row" class="table-primary">{{ $totals->totalUAInicial }}</td>
            <td scope="row" class="table-primary">{{ $totals->totalNacimientos }}</td>
            <td scope="row" class="table-primary">{{ $totals->totalMuertes }}</td>
            <td scope="row" class="table-primary">{{ $totals->totalDescartes }}</td>
            <td scope="row" class="table-primary">{{ $totals->totalVenta_cria }}</td>
            <td scope="row" class="table-primary">{{ $totals->totalVenta_beneficio }}</td>
            <td scope="row" class="table-primary">{{ $totals->cantidadFinal }}</td>
            <td scope="row" class="table-primary">{{ $totals->UAFinal }}</td>
        </tr>
        <tr>
            <td scope="row" class="table-info">índices de la finca</td>
            <td scope="row" class="table-info">-</td>
            <td scope="row" class="table-info">-</td>
            <td scope="row" class="table-info">{{ $baseIndiceNacimientos * 0.85 }} (75-90%)</td>
            <td scope="row" class="table-info">{{ $totals->totalAnimales * 0.03 }} (3%)</td>
            <td scope="row" class="table-info">-</td>
            <td scope="row" class="table-info">-</td>
            <td scope="row" class="table-info">-</td>
            <td scope="row" class="table-info">-</td>
            <td scope="row" class="table-info">-</td>
        </tr>
    </tbody>
</table>
</div>
@endsection