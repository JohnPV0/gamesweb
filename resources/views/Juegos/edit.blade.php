@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Editar juego</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                        {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/juegos/'.$juego->id]) !!}
                            {!! Form::label ('nombre','Nombre') !!}
                            <span>
                                {!! Form::text ('nombre',$juego->nombre,['placeholder'=>'Ingresa nombre del juego']) !!}
                            </span>
                        </li>
                        <li style="height: 120px;">
                            {!! Form::label ('descripcion','Descripcion') !!}
                            <span>
                                {!! Form::textarea ('descripcion', $juego->descripcion,
                                    [
                                        'placeholder'=>'Ingresa una descripcion del juego',
                                        'style'=>'
                                            height:100px;
                                            width:400px;'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('puntuacion', 'Puntuacion')!!}
                            <span>
                                {!! Form::select ('puntuacion', array('0'=>0, '1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5) , $juego->puntuacion, 
                                ['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('fecha_lanzamiento', 'Fecha de lanzamiento')!!}
                            <span>
                                {!! Form::date('fecha_lanzamiento', $juego->fecha_lanzamiento, ['placeholder' => 'Ingresa la fecha de lanzamiento', 'class' => 'form-control', 'format' => 'Y-m-d']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_categoria', 'Categoría') !!}
                            <span>
                                {!! Form::select ('id_categoria', $categorias->pluck('nombre','id')->all() , $juego->id_categoria
                                ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $juego->status ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar juego') !!}
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
