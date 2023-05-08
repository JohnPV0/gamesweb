@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear un juego en una plataforma</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/juegos_plataformas/'.$juego_plataforma->id])
                            !!}
                            {!! Form::label ('id_juego','Juego') !!}
                            <span>
                                {!! Form::select ('id_juego', $juegos->pluck('nombre','id')->all() ,
                                $juego_plataforma->id_juego
                                ,['placeholder'=>'Seleccionar ...', 'class'=>'form-control']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_plataforma','Plataforma') !!}
                            <span>
                                {!! Form::select ('id_plataforma', $plataformas->pluck('nombre','id')->all() ,
                                $juego_plataforma->id_plataforma
                                ,[
                                    'placeholder'=>'Seleccionar ...',
                                    'onchange'=>'mostrar(this.value);', 'class'=>'form-control'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('stock','Stock') !!}
                            <span>
                                {!! Form::text ('stock', $juego_plataforma->stock, ['placeholder'=>'Ingresa el stock',
                                'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57', 'class'=>'form-control']) !!} </span>
                        </li>
                        <li>
                            {!! Form::label ('total_descargas','Total de descargas') !!}
                            <span>
                                {!! Form::text ('total_descargas', $juego_plataforma->total_descargas,
                                ['placeholder'=>'Ingresa el total de
                                descargas', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57', 'class'=>'form-control']) !!}
                                    </span>
                        </li>
                        <li>
                            {!! Form::label('precio_compra', 'Precio de compra')!!}
                            <span>
                                {!! Form::text('precio_compra', $juego_plataforma->precio_compra, ['placeholder' =>
                                'Ingresa el precio de compra',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");', 'class'=>'form-control']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('precio_venta', 'Precio de venta')!!}
                            <span>
                                {!! Form::text('precio_venta', $juego_plataforma->precio_venta, ['placeholder' =>
                                'Ingresa el precio de venta',
                                'oninput' => 'this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\.\d{2})\d+$/g,
                                "$1");', 'class'=>'form-control']) !!}
                            </span>
                        </li>
                        <div id="pc">
                            <li>
                                {!! Form::label('procesador', 'Procesador o procesadores requeridos')!!}
                                <span>
                                    {!! Form::text('procesador', $juego_plataforma->procesador, ['placeholder' =>
                                    'Ingresa el o los procesadores', 'class'=>'form-control'])
                                    !!}
                                </span>
                            </li>
                            <li>
                                {!! Form::label('memoria_ram', 'Memoria RAM requerida')!!}
                                <span>
                                    {!! Form::text('memoria_ram', $juego_plataforma->memoria_ram, ['placeholder' =>
                                    'Ingresa la memoria RAM requerida', 'class'=>'form-control']) !!}
                                </span>
                            </li>
                            <li>
                                {!! Form::label('disco_duro', 'Almacenamiento requerido')!!}
                                <span>
                                    {!! Form::text('disco_duro', $juego_plataforma->disco_duro, ['placeholder' =>
                                    'Ingresa el almacenamiento
                                    requerido', 'class'=>'form-control']) !!}
                                </span>
                            </li>
                            <li>
                                {!! Form::label('tarjeta_grafica', 'Tarjeta(s) gráfica(s) requerida(s)')!!}
                                <span>
                                    {!! Form::text('tarjeta_grafica', $juego_plataforma->tarjeta_grafica, ['placeholder'
                                    => 'Ingresa la(s) tarjeta(s) gráfica(s)
                                    requerida(s)', 'class'=>'form-control']) !!}
                                </span>
                            </li>
                            <li>
                                {!! Form::label('sistema_operativo', 'Sistema operativo requerido')!!}
                                <span>
                                    {!! Form::text('sistema_operativo', $juego_plataforma->sistema_operativo,
                                    ['placeholder' => 'Ingresa el (los) sistema(s) operativo(s)
                                    requerido(s)', 'class'=>'form-control']) !!}
                                </span>
                            </li>
                            <li></li>
                        </div>
                        
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $juego_plataforma->status
                                ,['placeholder'=>'Seleccionar ...', 'class'=>'form-control']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar juego en la plataforma') !!}
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

<script>
    function mostrar(id) {
        if (id == 5) {
            $('#pc').show();
        } else {
            $('#pc').hide();
        }
    }
</script>
@endsection()