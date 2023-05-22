@extends('template.master')
@section('contenido_central')
<!-- ***** Start Stream Start ***** -->
<div class="start-stream">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Venta</em></h4>
        </div>
        <div class="col-lg-12">
        <div class="main-border-button">
            <a href="{{ asset('profile') }}">Ir a mi perfil</a>
        </div>
    </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="item">
                    <div class="icon">
                        <img src="assets/images/service-03.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>
                        <div class="alert alert-success">
                            {!! $success !!}
                        </div>
                    </h4>
                    
                </div>
            </div>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="{{ route('download_receive', ['id' => $venta->id]) }}">Descargar recibo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Start Stream End ***** -->
@endsection()