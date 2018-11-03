@extends('admin.layouts.admin')

@section('contenido')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Página de Inicio</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li>Páginas del sitio</li>
                            <li>Página de Inicio</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <!-- Sección Banner Principal -->
                <div class="row">
                    <section class="col-md-12">
                        <div class="titulo-seccion col-md-4">
                            <h4>Título Banner Principal</h4>
                            <input type="text" placeholder="CONSULTORES CONTABLES, TRIBUTARIOS Y FINANCIEROS">
                        </div>
                        <div class="titulo-seccion col-md-4">
                            <h4>Subtítulo Banner Principal</h4>
                            <input type="text" placeholder="Soluciones Eficacez, Desiciones Inteligentes">
                        </div>
                        <div class="titulo-seccion col-md-4">
                            <h4>Texto Botón Banner Principal</h4>
                            <input type="text" placeholder="Nuestro Portafolio de Servicios">
                        </div>                        
                        <div class="col-md-12">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/1.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Fondo Banner Principal</h4>
                                        <p class="card-text">1800 x 1200 Formatos admitidos: .png .jpg</p>
                                        <input type="file" class="btn btn-primary">
                                    </div>
                                </div>
                        </div>
                    </section>
                </div>    
                <!-- Fin sección Banner -->
                <div class="row">
                    <section>
                        <div class="titulo-seccion">
                            <h4>Servicios Principales</h4>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top image-responsive" src="/images/impuestos.jpg" alt="Card image cap">
                                <div class="card-block">
                                 <input class="col-md-12" type="text" placeholder="Impuestos Nacionales y Distritales">
                                 <p class="card-text">270 x 270 Formatos admitidos: .png .jpg</p>
                                 <input type="file" class="btn btn-primary col-md-12">
                                </div>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top image-responsive" src="/images/devoluciones.jpg" alt="Card image cap">
                            <div class="card-block">
                                 <input class="col-md-12" type="text" placeholder="Devoluciones y Compensaciones">
                                 <p class="card-text">270 x 270 Formatos admitidos: .png .jpg</p>
                                 <input type="file" class="btn btn-primary col-md-12">
                            </div>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top image-responsive" src="/images/creacion-de-empresas.jpg" alt="Card image cap">
                            <div class="card-block">
                                 <input class="col-md-12" type="text" placeholder="Asesoría en Creación de Empresas">
                                 <p class="card-text">270 x 270 Formatos admitidos: .png .jpg</p>
                                 <input type="file" class="btn btn-primary col-md-12">
                            </div>
                        </div>
                        <div class="card col-md-3">
                            <img class="card-img-top image-responsive" src="/images/software-contable.jpg" alt="Card image cap">
                            <div class="card-block">
                                 <input class="col-md-12" type="text" placeholder="Implementación de Software Contable Levisoft">
                                 <p class="card-text">270 x 270 Formatos admitidos: .png .jpg</p>
                                 <input type="file" class="btn btn-primary col-md-12">
                            </div>
                        </div>
                    </section>              
                </div>

                </div>
                <!-- /.container-fluid -->
        
@endsection
