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
                {{-- <pre>
                    @{{ $data }}
                </pre> --}}
                <!-- row -->
                <!-- Sección Banner Principal -->
                <div class="container-fluid">
                        <div class="titulo-seccion">
                            <h2>Sección Banner Principal</h2>                            
                        </div>
                        <div class="row">
                                <div class="banner-principal col-md-6 p-t-5">
                                    <div class="card">
                                        <img class="card-img-top image-responsive" v-if="path.a.imagen" :src="path.a.imagen" alt="Card image cap">
                                        @foreach ($logotipos as $logo)
                                            @if ($logo->seccion == 'fondo-banner-principal')
                                                <img class="card-img-top image-responsive" v-else src="{{ Storage::url( $logo->nombre ) }}" alt="{{$logo->descripcion}}">  
                                            @endif
                                        @endforeach
                                        <div class="card-block">
                                            <h4>Fondo Banner Principal  </h4>
                                            <p>1800 x 1200</p>
                                            <div class="input-files col-md-12 col-md-offset-4">
                                                <label for="input-image" ><img src="/images/boton-upload.png" @click="actividad('a', 318)"></label>
                                                <button class="btn btn-primary animated tada" v-if="images.a && path.a.activa" @click="upload(images.a, 'fondo-banner-principal')">@{{ boton }}</span></button>                                                
                                                <input type="file" class="input-image" id="input-image" @change="chengeImage">
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="titulos-de-pagina col-md-6">


                                <div class="col-md-12">
                                    <p class="seccion-desc">En esta sección modifque imagen de fondo del banner principal, título, subtítulo, texto y enlace del botón principal. Recomendamos respetar los tamaños de cada imagen.</p>
                                    <h4>Título Banner Principal</h4>
                                    <input type="text"  class="form-control" @keyup="bandera()" v-model="infobanner.titulo" placeholder="CONSULTORES CONTABLES, TRIBUTARIOS Y FINANCIEROS">                            
                                    <h4>Subtítulo Banner Principal</h4>
                                    <input type="text" class="form-control" @keyup="bandera()" v-model="infobanner.subtitulo" placeholder="Soluciones Eficacez, Desiciones Inteligentes">                            
                                    <h4>Botón Banner Principal</h4>
                                    <input type="text" class="form-control" @keyup="bandera()" v-model="infobanner.boton" placeholder="Nuestro Portafolio de Servicios">
                                    <h4>Link Botón Banner Principal</h4>
                                    <input type="text" class="form-control" @keyup="bandera()" v-model="infobanner.link" placeholder="Página enlazada: Portafolio">
                                    {{-- <div class="col-lg-9 col-sm-8 col-md-6 col-xs-12"> --}}
                                        <button v-if="infobanner.bandera" @click="actualizarBanner" class="btn btn-primary mt-4">Actualizar</button>
                                    {{-- </div> --}}
                                </div>
                        </div>

                        <div class="row"> 
                            <div class="servicios-principales col-md-12">
                                <div>
                                    <h4>Servicios Principales</h4>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" v-if="path.b.imagen" :src="path.b.imagen" alt="Card image cap">
                                    @foreach ($logotipos as $logo)
                                            @if ($logo->seccion == 'impuestos-nacionales-distritales')
                                                <img class="card-img-top image-responsive" v-else src="{{ Storage::url( $logo->nombre ) }}" alt="{{$logo->descripcion}}">  
                                            @endif
                                        @endforeach
                                    <div class="card-block">
                                        <input class="col-md-12" class="form-control" type="text" placeholder="Impuestos Nacionales y Distritales">
                                        <p>270 x 270</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image2" ><img src="/images/boton-upload.png" @click="actividad('b', 318)"></label>
                                            <button class="btn btn-primary animated tada" v-if="images.b && path.b.activa" @click="upload(images.b, 'impuestos-nacionales-distritales')">@{{ boton }}</span></button>
                                            <input type="file" class="input-image" id="input-image2" @change="chengeImage" accept="image/png, .jpeg, .jpg, .svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" v-if="path.c.imagen" :src="path.c.imagen" alt="Card image cap">
                                    @foreach ($logotipos as $logo)
                                            @if ($logo->seccion == 'devoluciones-compensaciones')
                                                <img class="card-img-top image-responsive" v-else src="{{ Storage::url( $logo->nombre ) }}" alt="{{$logo->descripcion}}">  
                                            @endif
                                        @endforeach
                                    <div class="card-block">
                                        <input class="col-md-12" class="form-control" type="text" placeholder="Devoluciones y Compensaciones">
                                        <p>270 x 270</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image3" ><img src="/images/boton-upload.png" @click="actividad('c', 318)"></label>
                                            <button class="btn btn-primary animated tada" v-if="images.c && path.c.activa" @click="upload(images.c, 'devoluciones-compensaciones')">@{{ boton }}</span></button>
                                            <input type="file" class="input-image" id="input-image3" @change="chengeImage" accept="image/png, .jpeg, .jpg, .svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" v-if="path.d.imagen" :src="path.d.imagen" alt="Card image cap">
                                    @foreach ($logotipos as $logo)
                                            @if ($logo->seccion == 'asesoria-ereacion-empresas')
                                                <img class="card-img-top image-responsive" v-else src="{{ Storage::url( $logo->nombre ) }}" alt="{{$logo->descripcion}}">  
                                            @endif
                                        @endforeach
                                    <div class="card-block">
                                        <input class="col-md-12" class="form-control" type="text" placeholder="Asesoría en Creación de Empresas">
                                        <p>270 x 270</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image2" ><img src="/images/boton-upload.png" @click="actividad('d', 318)"></label>
                                            <button class="btn btn-primary animated tada" v-if="images.d && path.d.activa" @click="upload(images.d, 'asesoria-ereacion-empresas')">@{{ boton }}</span></button>
                                            <input type="file" class="input-image" id="input-image2" @change="chengeImage" accept="image/png, .jpeg, .jpg, .svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3">
                                    <img class="card-img-top image-responsive" v-if="path.e.imagen" :src="path.e.imagen" alt="Card image cap">
                                    @foreach ($logotipos as $logo)
                                            @if ($logo->seccion == 'implementacion-software-contable-levisoft')
                                                <img class="card-img-top image-responsive" v-else src="{{ Storage::url( $logo->nombre ) }}" alt="{{$logo->descripcion}}">  
                                            @endif
                                        @endforeach
                                    <div class="card-block">
                                        <input class="col-md-12" class="form-control" type="text" placeholder="Implementación de Software Contable Levisoft">
                                        <p>270 x 270</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image2" ><img src="/images/boton-upload.png" @click="actividad('e', 318)"></label>
                                            <button class="btn btn-primary animated tada" v-if="images.e && path.e.activa" @click="upload(images.e, 'implementacion-software-contable-levisoft')">@{{ boton }}</span></button>
                                            <input type="file" class="input-image" id="input-image2" @change="chengeImage" accept="image/png, .jpeg, .jpg, .svg">
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


@section('script')

<script src="/admin/inicio/js/inicio.js"></script>
@endsection