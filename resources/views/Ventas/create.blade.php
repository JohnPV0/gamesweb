@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear venta</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open(['url'=>'/ventas']) !!}
                            {!! Form::label ('id_cliente','Cliente') !!}
                            <span>
                                {!! Form::select ('id_cliente',$users->pluck('username','id')->toArray(),null,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('fecha', 'Fecha') !!}
                            <span>
                                {!! Form::date('fecha', null, ['placeholder' => 'Ingresa la fecha de nacimiento', 'class' => 'form-control', 'format' => 'Y-m-d']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('subtotal', 'Subtotal') !!}
                            <span>
                                {!! Form::text('subtotal', null, ['placeholder' => 'Ingresa el subtotal',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");']) !!}    
                            </span>
                        </li>
                        <li>
                            {!! Form::label('iva', 'IVA') !!}
                            <span>
                                {!! Form::text('iva', null, ['placeholder' => 'Ingresa el IVA',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");']) !!}    
                            </span>
                        </li>
                        <li>
                            {!! Form::label('total', 'Total') !!}
                            <span>
                                {!! Form::text('total', null, ['placeholder' => 'Ingresa el total',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");']) !!}    
                            </span>
                        </li>
                        <li>
                            {!! Form::label('id_tipo_pago', 'Tipo de pago') !!}
                            <span>
                                {!! Form::select ('id_tipo_pago',$tipos_pago->pluck('nombre','id')->toArray(),null,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('id_usuario', 'Usuario') !!}
                            <span>
                                {!! Form::select ('id_usuario',$users->pluck('username','id')->toArray(),null,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                    array('2'=>'Finalizar venta', '1'=>'En carrito','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar venta') !!}
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