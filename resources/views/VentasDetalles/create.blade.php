@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear detalle de una venta</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open(['url'=>'/ventas_detalles']) !!}
                            {!! Form::label ('id_venta','Venta') !!}
                            <span>
                                {!! Form::select ('id_venta',$ventas->pluck('id_cliente'.' '.'fecha','id')->toArray(),null,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_juego','Juego') !!}
                            <span>
                                {!! Form::select ('id_juego',$juegos->pluck('nombre','id')->toArray(),null,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_plataforma','Plataforma') !!}
                            <span>
                                {!! Form::select ('id_plataforma',$plataformas->pluck('nombre','id')->toArray(),null,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('cantidad', 'Cantidad') !!}
                            <span>
                                {!! Form::text('cantidad', null, ['placeholder'=>'Ingresa la cantidad', 'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57']) !!} 
                            </span>
                        </li>
                        <li>
                            {!! Form::label('precio_compra', 'Precio de compra') !!}
                            <span>
                                {!! Form::text('precio_venta', null, ['placeholder' => 'Ingresa el precio de compra',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");']) !!}    
                            </span>
                        </li>
                        <li>
                            {!! Form::label('precio_venta', 'Precio de venta') !!}
                            <span>
                                {!! Form::text('precio_venta', null, ['placeholder' => 'Ingresa el precio de venta',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");']) !!}    
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
                                {!! Form::submit('Guardar detalle') !!}
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
