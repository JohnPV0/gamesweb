@extends('template.master')
@section('contenido_central')

<!-- ***** Start Stream Start ***** -->
<div class="start-stream">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Mensaje</em></h4>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="item">
                    <div class="icon">
                        <img src="assets/images/service-03.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>
                        @if ($var === '1')
                        <div class="alert alert-success">
                            {!! $mensaje !!}
                        </div>
                        @else
                        <div class="alert alert-danger">
                            {!! $mensaje !!}
                        </div>
                        @endif
                    </h4>
                    
                </div>
            </div>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="{!! asset($ruta_boton) !!}">{!! $mensaje_boton !!}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Start Stream End ***** -->

@endsection()