@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear usuario</h1>
                    </div>
                </div>
                
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                    <li>
                        {!! Form::open(['url'=>'/users', 'enctype'=>'multipart/form-data']) !!}
                        {!! Form::hidden('ruta_foto_perfil', 'usersfotos') !!}

                        {!! Form::label ('foto','Foto de perfil') !!}
                            <span>
                                {!! Form::file('foto', ['accept' => 'image/*']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('nombre','Nombre') !!}
                            <span>
                                {!! Form::text ('nombre',null,['placeholder'=>'Ingresa el nombre del usuario']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('ap_pat','Apellido paterno') !!}
                            <span>
                                {!! Form::text ('ap_pat',null,['placeholder'=>'Ingresa el apellido paterno']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('ap_mat','Apellido materno') !!}
                            <span>
                                {!! Form::text ('ap_mat',null,['placeholder'=>'Ingresa el apellido materno']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('email','Email') !!}
                            <span>
                                {!! Form::email ('email',null,['placeholder'=>'Ingresa el email']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('telefono', 'Telefono') !!}
                            <span>
                            {!! Form::text ('telefono', null, ['placeholder'=>'Ingresa el telefono', 'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('direccion','Dirección') !!}
                            <span>
                                {!! Form::text ('direccion',null,['placeholder'=>'Ingresa la direccion']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_pais', 'Pais') !!}
                            <span>
                                {!! Form::select('id_pais', $paises->pluck('nombre','id')->toArray(), null, 
                                    [
                                        'placeholder'=>'Seleccionar ...',
                                        'onchange'=>'cargarEntidades(this.value);'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_entidad', 'Entidad') !!}
                            <span>
                                {!! Form::select('id_entidad', array(''=>''), null, [
                                    'placeholder'=>'Seleccionar ...',
                                    'onchange'=>'cargarMunicipios(this.value);'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('municipio_id', 'Municipio') !!}
                            <span>
                                {!! Form::select('municipio_id', array(''=>''), null, ['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_tipo_usu', 'Tipo de usuario') !!}
                            <span>
                                {!! Form::select('id_tipo_usu', $tipos_usuario->pluck('nombre','id')->toArray(), null, ['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('colonia', 'Colonia') !!}
                            <span>
                                {!! Form::text('colonia', null, ['placeholder'=>'Ingresa la colonia']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('cp', 'Código postal') !!}
                            <span>
                                {!! Form::text('cp', null, ['placeholder'=>'Ingresa el código postal', 'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('fecha_naci', 'Fecha de nacimiento') !!}
                            <span>
                                {!! Form::date('fecha_naci', null, ['placeholder' => 'Ingresa la fecha de nacimiento', 'class' => 'form-control', 'format' => 'Y-m-d']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('username', 'Username') !!}
                            <span>
                                {!! Form::text('username', null, ['placeholder'=>'Ingresa el username']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('password', 'Password') !!}
                            <span>
                                {!! Form::password('password', null, ['placeholder'=>'Ingresa el password']) !!}
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
                                {!! Form::submit('Guardar usuario') !!}
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
