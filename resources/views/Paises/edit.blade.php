@extends('template.master')
@section('contenido_central')

<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Editar pais</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/paises/'.$pais->id]) !!}
                            {!! Form::label ('nombre','Nombre del pais') !!}
                            <span>
                                {!! Form::text ('nombre',$pais->nombre,['placeholder'=>'Ingresa nombre del pais']) !!}
                            </span>
                        </li>
                        <li>{!! Form::label ('clave','Clave del pais') !!}
                            <span>
                                {!! Form::text ('clave',$pais->clave,['placeholder'=>'Ingresa clave del pais']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $pais->status ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar Pais') !!}
                                {!! Form::close() !!}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()