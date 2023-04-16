@extends('template.master')
@section('contenido_central')
<!-- ***** Gaming Library Start ***** -->
<div class="heading-section">
    <h4><em>Detalle del</em> juego en plataformas</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $juego_plataforma->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Juego</h4><span style="color: white;">{!! $juego_plataforma->id_juego !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Juego</h4><span style="color: white;">{!! $juego_plataforma->juegos->nombre!!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Plataforma</h4><span style="color: white;">{!! $juego_plataforma->id_plataforma !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Plataforma</h4><span style="color: white;">{!! $juego_plataforma->plataformas->nombre!!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Stock</h4><span style="color: white;">{!! $juego_plataforma->stock !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Total de descargas</h4><span style="color: white;">{!! $juego_plataforma->total_descargas !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Precio compra</h4><span style="color: white;">{!! $juego_plataforma->precio_compra !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Precio venta</h4><span style="color: white;">{!! $juego_plataforma->precio_venta !!}</span>
            </div>
        </div>
        @if ($juego_plataforma->id_plataforma == 5)
        <div class="col-lg-12">
            <div class="item">
                <h4>Procesador</h4><span style="color: white;">{!! $juego_plataforma->procesador !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Memoria RAM</h4><span style="color: white;">{!! $juego_plataforma->memoria_ram !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Almacenamiento en disco</h4><span style="color: white;">{!! $juego_plataforma->disco_duro !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Tarjeta gráfica</h4><span style="color: white;">{!! $juego_plataforma->tarjeta_grafica !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Sistema operativo</h4><span style="color: white;">{!! $juego_plataforma->sistema_operativo !!}</span>
            </div>
        </div>
        @endif
        
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $juego_plataforma->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('juegos_plataformas') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
