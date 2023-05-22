@extends('template.master')
@section('contenido_central')

<!-- ***** Banner Start ***** -->
<div class="col-lg-12">
    <div class="heading-section">
        <h4><em>CR</em>UDS</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clips">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>JUE</em>GOS</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('categorias') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Categorias</h4>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('comentarios') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Comentarios</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('descargas') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Descargas</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('fotos_juegos') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Fotos de juegos</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('juegos') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Juegos</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('juegos_plataformas') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Juegos y plataformas</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('plataformas') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Plataformas</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>USUA</em>RIOS</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('tipos_usuario') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Tipos de usuario</h4>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('users') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Usuarios</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>VEN</em>TAS</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('tipos_pago') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Tipos de pago</h4>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('ventas') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Ventas</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('ventas_detalles') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Detalles de ventas</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>COR</em>REOS</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('correos') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Correos</h4>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>PAISES Y</em> ENTIDADES</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('municipios') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Municipios</h4>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('entidades') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Entidades</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="{!! asset('paises') !!}">
                                    <div class="item">
                                        <span><i class="fa fa-eye"></i></span>
                                        <div class="down-content">
                                            <h4>Paises</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->

@endsection()