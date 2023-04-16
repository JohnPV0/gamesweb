@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear foto de un juego</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open(['url'=>'/fotos_juegos']) !!}
                            {!! Form::label ('id_juego','Juego') !!}
                            <span>
                                {!! Form::select ('id_juego', $juegos->pluck('nombre','id')->all() , null
                                ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('ruta', 'Imagen')!!}
                            <span>
                                {!! Form::file('ruta', ['accept' => 'image/*']) !!}
                                <!--{!! Form::file('ruta', ['accept' => 'image/*', 'onchange' => 'previewImage(event)']) !!}
                                <img id="preview" src="" alt="Vista previa de la imagen" />-->
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar foto') !!}
                                {!! Form::close() !!}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->
@endsection()
