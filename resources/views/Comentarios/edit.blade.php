@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Editar Comentario</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/comentarios/'.$comentario->id]) !!}
                            {!! Form::label ('id_juego','Juego') !!}
                            <span>
                                {!! Form::select ('id_juego', $juegos->pluck('nombre','id')->all() , $comentario->id_juego
                                ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_usuario','Usuario') !!}
                            <span>
                                {!! Form::select ('id_usuario', $usuarios->pluck('username','id')->all() , $comentario->id_usuario
                                ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('puntuacion', 'Puntuacion')!!}
                            <span>
                                {!! Form::select ('puntuacion', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5) , $comentario->puntuacion, 
                                ['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('titulo','Titulo') !!}
                            <span>
                                {!! Form::text ('titulo', $comentario->titulo, ['placeholder'=>'Ingresa un titulo para el comentario']) !!}
                            </span>
                        </li>
                        <li style="height: 120px;">
                            {!! Form::label ('comentario','Comentario') !!}
                            <span>
                                {!! Form::textarea ('comentario', $comentario->comentario,
                                    [
                                        'placeholder'=>'Ingresa comentario',
                                        'style'=>'
                                            height:100px;
                                            width:400px;'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $comentario->status ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar comentario') !!}
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
