@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                        <h1>Contacto</h1>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-lg-12 align-self-center">
                        <ul>
                            <span>
                                <li>
                                    {!! Form::open(['method'=>'POST', 'url'=>'/contacto/enviar']) !!}
                                    {!! Form::label ('asunto','Asunto') !!}
                                    {!! Form::text ('asunto',null,['placeholder'=>'Asunto', 'class'=>'form-control'])
                                    !!}
                                </li>
                            </span>
                            <span>
                                <li>
                                    {!! Form::label('email', 'Correo electrónico') !!}
                                    {!! Form::email('email', null, ['placeholder' => 'Ingresa un correo electrónico válido', 'class'=>'form-control']) !!}
                                </li>
                            </span>
                            <span>
                                <li>
                                    {!! Form::label ('mensaje','Mensaje') !!}
                                    {!! Form::textarea ('mensaje',null,
                                    [
                                    'placeholder'=>'Escribe tu mensaje',
                                    'class'=>'form-control'
                                    ]) !!}
                                </li>
                            </span>

                        </ul>
                    </div>
                    
                </div>
                <div class="col-lg-5"></div>
                    <div class="col-lg-4">
                        <li>
                            {!! Form::submit('Enviar', ['class'=>'btn btn-primary btn-lg']) !!}
                            {!! Form::close() !!}
                        </li>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->
@endsection()