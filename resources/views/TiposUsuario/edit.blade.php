@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Editar tipo de usuario</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open(['method'=>'PATCH','url'=>'/tipos_usuario/'.$tipo_usuario->id]) !!}
                            {!! Form::label ('nombre','Nombre del tipo de usuario') !!}
                            <span>
                                {!! Form::text ('nombre',$tipo_usuario->nombre,['placeholder'=>'Ingresa nombre del tipo de pago']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('nivel', 'Nivel:') !!}
                            <span>
                            {!! Form::text ('nivel', $tipo_usuario->nivel, ['placeholder'=>'Ingresa el nivel', 'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $tipo_usuario->status ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar tipo de pago') !!}
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
