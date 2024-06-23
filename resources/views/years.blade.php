@extends('layout')
@section('title')
    Home
@endsection

@section('content')
<div class="row">
    <div class="col-5 col-md-4">
        <img src="{{ url('/img/logo.png') }}">
    </div>
    <div class="col-5 col-md-6 d-flex justify-content-start align-items-center pt-4">
        <h1 class="ms-4">Movimiento de rebaño - varios años</h1>
    </div>
</div>
<hr />

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="1" rowspan="2" class="table-secondary text-center align-middle">Leyenda</th>
            <th scope="col" colspan="4" class="table-secondary text-center">índices</th>
            <th scope="col" rowspan="2" class="table-secondary text-center align-middle">Observaciones</th>
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

<h1>Movimiento por años</h1>
<h2>2023</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="2">Fecha:</th>
            <th scope="col" colspan="4">Responsable:</th>
        </tr>
        <tr>
            <th scope="col">Tipo de animal</th>
            <th scope="col">Nacimientos</th>
            <th scope="col">Mortalidad</th>
            <th scope="col">Descartes</th>
            <th scope="col"># animales</th>
            <th scope="col">Unidad animal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">Toros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Toretes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas en produccion</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas secas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas horras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Novillas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Mautas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Mautes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Becerras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Becerros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row" class="table-primary">Totales</td>
            <td scope="row" class="table-primary">1</td>
            <td scope="row" class="table-primary">2</td>
            <td scope="row" class="table-primary">3</td>
            <td scope="row" class="table-primary">4</td>
            <td scope="row" class="table-primary">5</td>
        </tr>
        <tr>
            <td scope="row" class="table-info">índices de la finca</td>
            <td scope="row" class="table-info">1</td>
            <td scope="row" class="table-info">2</td>
            <td scope="row" class="table-info">3</td>
            <td scope="row" class="table-info">4</td>
            <td scope="row" class="table-info">5</td>
        </tr>
    </tbody>
</table>

<h2>2024</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="2">Fecha:</th>
            <th scope="col" colspan="4">Responsable:</th>
        </tr>
        <tr>
            <th scope="col">Tipo de animal</th>
            <th scope="col">Nacimientos</th>
            <th scope="col">Mortalidad</th>
            <th scope="col">Descartes</th>
            <th scope="col"># animales</th>
            <th scope="col">Unidad animal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">Toros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Toretes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas en produccion</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas secas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas horras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Novillas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Mautas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Mautes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Becerras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Becerros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row" class="table-primary">Totales</td>
            <td scope="row" class="table-primary">1</td>
            <td scope="row" class="table-primary">2</td>
            <td scope="row" class="table-primary">3</td>
            <td scope="row" class="table-primary">4</td>
            <td scope="row" class="table-primary">5</td>
        </tr>
        <tr>
            <td scope="row" class="table-info">índices de la finca</td>
            <td scope="row" class="table-info">1</td>
            <td scope="row" class="table-info">2</td>
            <td scope="row" class="table-info">3</td>
            <td scope="row" class="table-info">4</td>
            <td scope="row" class="table-info">5</td>
        </tr>
    </tbody>
</table>

<h2>2025</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="2">Fecha:</th>
            <th scope="col" colspan="4">Responsable:</th>
        </tr>
        <tr>
            <th scope="col">Tipo de animal</th>
            <th scope="col">Nacimientos</th>
            <th scope="col">Mortalidad</th>
            <th scope="col">Descartes</th>
            <th scope="col"># animales</th>
            <th scope="col">Unidad animal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">Toros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Toretes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas en produccion</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas secas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Vacas horras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Novillas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Mautas</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Mautes</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Becerras</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row">Becerros</td>
            <td scope="row">1</td>
            <td scope="row">2</td>
            <td scope="row">3</td>
            <td scope="row">4</td>
            <td scope="row">5</td>
        </tr>
        <tr>
            <td scope="row" class="table-primary">Totales</td>
            <td scope="row" class="table-primary">1</td>
            <td scope="row" class="table-primary">2</td>
            <td scope="row" class="table-primary">3</td>
            <td scope="row" class="table-primary">4</td>
            <td scope="row" class="table-primary">5</td>
        </tr>
        <tr>
            <td scope="row" class="table-info">índices de la finca</td>
            <td scope="row" class="table-info">1</td>
            <td scope="row" class="table-info">2</td>
            <td scope="row" class="table-info">3</td>
            <td scope="row" class="table-info">4</td>
            <td scope="row" class="table-info">5</td>
        </tr>
    </tbody>
</table>
@endsection