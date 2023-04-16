@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear Entidad</h1>
                    </div>
                </div>
                
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open(['url'=>'/entidades']) !!}

                            {!! Form::label ('id_pais','Pais:') !!}
                            <span>
                                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null
                                ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('nombre','Nombre de la entidad') !!}
                            <span>
                                {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre de la entidad']) !!}
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
                                {!! Form::submit('Guardar entidad') !!}
                            </span>
                        </li>
                        {!! Form::close() !!}
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->
@endsection()
