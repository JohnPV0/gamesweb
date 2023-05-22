@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-4">
                    <img src="../storage/usersfotos/{!! auth()->user()->ruta_foto_perfil !!}" alt=""
                        style="border-radius: 23px;">
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                        <span>Offline</span>
                        <h4>{!! auth()->user()->username !!}</h4>
                        <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                        <div class="main-border-button">
                            <a href="#">Start Live Stream</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <ul>
                        <li>Total de juegos  <span>{!! $total_juegos !!}</span></li>
                        <li>Friends Online <span>16</span></li>
                        <li>Live Streams <span>None</span></li>
                        <li>Clips <span>29</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->

<!-- ***** Gaming Library Start ***** -->
<div id="library">
    <div class="gaming-library profile-library">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>Tu</em> Librería</h4>
            </div>
            @foreach ($descargas as $descarga)
            <div class="item" >
                <ul>
                    <li><img src="../storage/juegosfotos/{{ $descarga->ruta }}" alt="" class="templatemo-item"></li>
                    <li>
                        <h4>{!! $descarga->juegos->nombre !!}</h4><span>{!! $descarga->juegos->categorias->nombre !!}</span>
                    </li>
                    <li>
                        <h4>Plataforma</h4><span>{!! $descarga->plataformas->nombre !!}</span>
                    </li>
                    <li>
                        <h4>Fecha</h4><span>{!! $descarga->fecha !!}</span>
                    </li>
                @if ($descarga->status == 2)
                    <li>
                        <h4>Estado</h4><span>
                            Descargado
                        </span>
                    </li>
                    <li>
                    <div class="main-border-button border-no-active"><a href="" onclick="downloadJuego({!! $descarga->id !!}, 1)">Descargado</a></div>
                    </li>
                    @else
                    <li>
                        <h4>Estado</h4><span>
                            No descargado
                        </span>
                    </li>
                    <li>
                        <div class="main-border-button"><a href="" onclick="downloadJuego({!! $descarga->id !!}, 2)">Descargar</a></div>
                    </li>
                    @endif
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ***** Gaming Library End ***** -->
<script>
    function downloadJuego(id_descarga, tipo) 
    {
        event.preventDefault();
        $.ajax({
            url: "{{ asset('download_juego') }}/"+id_descarga+'/'+tipo,
            method: 'GET',
            success: function (data) {
                $('#library').html(data)
            }
        });
    }
</script>
@endsection()