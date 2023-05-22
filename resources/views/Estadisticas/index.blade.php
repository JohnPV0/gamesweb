@extends('template.master')
@section('contenido_central')

<div class="row">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Ventas</em> en la ultima semana</h4>
            <div class="main-button">
                <a href="{{ asset('download_ventas') }}">Descargar reporte</a>
            </div>
        </div>
    </div>
    <div id="chartContainer">
        <canvas id="ventas-last-week"></canvas>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Juegos más</em> vendidos</h4>
        </div>
        <!-- <div class="main-button">
                <a href="{{ asset('download_juegos') }}">Descargar reporte</a>
        </div> -->
    </div>
    <div id="chartContainer">
        <canvas id="juegos-vendidos"></canvas>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Usuarios con</em> más compras</h4>
        </div>
    </div>
    <!-- <div class="main-button">
            <a href="">Descargar reporte</a>
    </div> -->
    <div id="chartContainer">
        <canvas id="usuarios-compras"></canvas>
    </div>
</div>




@endsection()