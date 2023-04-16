@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Editar categoria</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/categorias/'.$categoria->id]) !!}
                            {!! Form::label ('nombre','Nombre') !!}
                            <span>
                                {!! Form::text ('nombre',$categoria->nombre,['placeholder'=>'Ingresa nombre de la categoria']) !!}
                            </span>
                        </li>
                        <li style="height: 120px;">
                        {!! Form::label ('descripcion','Descripcion') !!}    
                            <span>
                                {!! Form::textarea ('descripcion',$categoria->descripcion,
                                    [
                                        'placeholder'=>'Ingresa una descripcion para la categoria',
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
                                array('1'=>'Activo','0'=>'Baja') , $categoria->status ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar categoria') !!}
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
