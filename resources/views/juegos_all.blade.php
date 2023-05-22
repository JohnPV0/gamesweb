@extends('template.master')
@section('contenido_central')

    <!-- ***** Most Popular Start ***** -->
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" id="respuesta">

            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-border-button">
            <a href="{{ asset('inicio') }}">Regresar</a>
        </div>
    </div>
    <div class="most-popular" id="juegos_generales">
        <div class="row" id="juegos_all">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="main-border-button" style="width=100%; height=100%;">
                            <a href="#" onclick="obtenerJuegosByPlataforma(-1)">
                                Todos
                            </a>
                        </div>
                    </div>
                    @foreach($plataformas as $plataforma)
                    <div class="col-lg-2 col-sm-6">
                        <div class="main-border-button" style="width=100%; height=100%;">
                            <a href="#" onclick="obtenerJuegosByPlataforma({!! $plataforma->id !!})">
                                {!! $plataforma->nombre !!}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="most-popular">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>Juegos más populares</em> Ahora</h4>
                </div>
                <div id="juegos_plataformas">
                    <div class="row">
                        @foreach($juegos as $juego)
                        <div class="col-lg-4 col-sm-6">
                            <div class="main-button">
                                <a href="#"
                                    onclick="agregarCarrito({!! $juego->id_juego !!}, {!! $juego->id_plataforma !!})">Agregar
                                    al carrito</a>
                            </div>
                            <a href="{{ asset('detalle_juego') }}/{{ $juego->id }}">

                                <div class="item">
                                    <img src="../storage/juegosfotos/{!! $juego->ruta !!}" alt="">
                                    <h4>{!! $juego->juegos->nombre !!}<br><span>{!! $juego->plataformas->nombre !!}</span>
                                    </h4>
                                    <ul>
                                        <li><i class="fa fa-star"></i> {!! $juego->juegos->puntuacion !!}</li>
                                        <li><i class="fa fa-download"></i> {!! $juego->total_descargas !!}</li>
                                    </ul>
                                </div>

                            </a>

                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button">
                            <a href="{{ asset('inicio') }}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Most Popular End ***** -->


<script>
function obtenerJuegosByPlataforma(id_plataforma) {
    event.preventDefault();
    url = '{{ asset('/obtenerJuegosByPlataforma') }}/' + id_plataforma;
    $.ajax({
        url: url,
        type: 'GET',
        data: {},
        success: function(data) {
            $('#juegos_plataformas').html(data);
            $('html, body').animate({
                scrollTop: $('#juegos_all').offset().top
            }, 100);
        },
        error: function(data) {
            console.log(data);
        }
    });
}
</script>
@endsection()