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
                        <button class="btn btn-primary guardar">Guardar Cambios</button>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <!-- Sección Banner Principal -->
                <div class="container-fluid">
                        <div class="titulo-seccion">
                            <h2>Sección Banner Principal</h2>                            
                        </div>

                        <div class="row">
                                <div class="banner-principal col-md-6 p-t-5">
                                        <div class="card">
                                            <img class="card-img-top image-responsive" src="/images/bg.jpg" alt="Imagen Banner">
                                            <div class="card-block">
                                                <h4>Fondo Banner Principal</h4>
                                                <p>1800 x 1200</p>
                                                <div class="input-files col-md-12 col-md-offset-4">
                                                    <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                                    <input type="file" class="input-image" id="input-image">
                                                </div>    
                                            </div>
                                        </div>
                                </div>

                                <div class="titulos-de-pagina col-md-6">
                                    <div class="col-md-12">
                                        <p class="seccion-desc">En esta sección modifque imagen de fondo del banner principal, título, subtítulo, texto y enlace del botón principal. Recomendamos respetar los tamaños de cada imagen.</p>
                                        <h4>Título Banner Principal</h4>
                                        <input type="text"  class="form-control" placeholder="CONSULTORES CONTABLES, TRIBUTARIOS Y FINANCIEROS">                            
                                        <h4>Subtítulo Banner Principal</h4>
                                        <input type="text" class="form-control" placeholder="Soluciones Eficacez, Desiciones Inteligentes">                            
                                        <h4>Botón Banner Principal</h4>
                                        <input type="text" class="form-control" placeholder="Nuestro Portafolio de Servicios">
                                        <h4>Link Botón Banner Principal</h4>
                                        <input type="text" class="form-control" placeholder="Página enlazada: Portafolio">                                                       
                                </div>
                        </div>

                        <div class="row"> 
                            <div class="servicios-principales col-md-12">
                                <div>
                                    <h4>Servicios Principales</h4>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" src="/images/impuestos.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <input class="col-md-12" class="form-control" type="text" placeholder="Impuestos Nacionales y Distritales">
                                            <p>270 x 270</p>
                                            <div class="input-files mx-auto">
                                                <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                                <input type="file" class="input-image" id="input-image">
                                            </div>
                                        </div>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" src="/images/devoluciones.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <input class="col-md-12" type="text" placeholder="Devoluciones y Compensaciones">
                                        <p class="card-text">270 x 270</p>
                                        <div class="input-files mx-auto">
                                                    <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                                    <input type="file" class="input-image" id="input-image">
                                                </div>
                                    </div>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" src="/images/creacion-de-empresas.jpg" alt="Card image cap">
                                <div class="card-block">
                                     <input class="col-md-12" type="text" placeholder="Asesoría en Creación de Empresas">
                                     <p class="card-text">270 x 270</p>
                                     <div class="input-files mx-auto">
                                                    <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                                    <input type="file" class="input-image" id="input-image">
                                                </div>
                                </div>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" src="/images/software-contable.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <input class="col-md-12" type="text" placeholder="Implementación de Software Contable Levisoft">
                                        <p class="card-text">270 x 270</p>
                                        <div class="input-files">
                                                    <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                                    <input type="file" class="input-image" id="input-image">
                                                </div>
                                    </div>
                                </div>

                        </div>

                        </div>

                        
                    </div>
                </div>    
                <!-- Fin sección Banner -->
                <div class="container-fluid">
                        <div class="titulo-seccion">
                            <h2>Sección servicios contables</h2>
                        </div>
                        <div class="row servicios-contables">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Administración de Nómina">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Administración de Cartera">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Facturación Electrónica">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Software Contable">
                            </div>
                        </div>  

                        <div class="p-t-30"></div>

                        <div class="row servicios-contables">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Revisoría Fiscal">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Certificación de Ingresos">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Reporte Supersociedades">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Auditoría y Control Interno">
                            </div>
                        </div>
                </div>

                <div class="p-t-20"></div> 
                
</div>        
@endsection
