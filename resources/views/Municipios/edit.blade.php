@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Editar Municipio</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/municipios/'.$municipio->id]) !!}
                            {!! Form::label ('id_entidad','Entidad:') !!}
                            <span>
                                {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() ,
                                $municipio->id_entidad
                                ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('nombre','Nombre del municipio') !!}
                            <span>
                                {!! Form::text ('nombre',$municipio->nombre,['placeholder'=>'Ingresa nombre del
                                municipio']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $municipio->status ,['placeholder'=>'Seleccionar
                                ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar Municipio') !!}
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