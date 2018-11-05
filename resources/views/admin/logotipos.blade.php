@extends('admin.layouts.admin')

@section('contenido')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Logotipos</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Sobre la empresa</a></li>
                        <li class="active">Logotipos</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div>
                <div id="list"></div>
                <pre>
                    @{{$data}}
                </pre>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                <img class="card-img-top image-responsive" v-if="path.a" :src="path.a" alt="Card image cap">
                                <img class="card-img-top image-responsive" v-else src="{{ Storage::url( $logotipos[0]->nombre ) }}" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Logo para fondo claro</h4>
                                        <p class="card-text">720 x 560 Formatos admitidos: .svg .png .jpg</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                            <button class="btn btn-primary" v-if="images.a" @click="upload(images.a, 'logo-para-fondo-claro')">@{{ progress }}</span></button>
                                            <input type="file" @change="chengeImage" class="input-image" id="input-image" accept="image/png, .jpeg, .jpg, image/gif">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/2.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Logo para fondo oscuro</h4>
                                        <p class="card-text">720 x 560 Formatos admitidos: .svg .png .jpg</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                            <input type="file" class="input-image" id="input-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/3.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Logo para fondo claro horizontal</h4>
                                        <p class="card-text">720 x 560 Formatos admitidos: .svg .png .jpg</p>
                                        <div class="input-files mx-auto">
                                            <label for="input-image" ><img src="/images/boton-upload.png"></label>
                                            <input type="file" class="input-image" id="input-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/1.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Logo para fondo claro vertical</h4>
                                        <p class="card-text">720 x 560 Formatos admitidos: .svg .png .jpg</p>
                                        <a href="#" class="btn btn-primary">Cambiar imagen</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/2.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Logo para fondo oscuro horizontal</h4>
                                        <p class="card-text">720 x 560 Formatos admitidos: .svg .png .jpg</p>
                                        <a href="#" class="btn btn-primary">Cambiar imagen</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/3.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Logo para fondo claro vertical</h4>
                                        <p class="card-text">720 x 560 Formatos admitidos: .svg .png .jpg</p>
                                        <a href="#" class="btn btn-primary">Cambiar imagen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Favicon</h3>
                        <div class="">
                            <div class="card-group">
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/1.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Apple Icon Touch</h4>
                                        <p class="card-text">129 x 129 .png</p>
                                        <a href="#" class="btn btn-primary">Cambiar imagen</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/2.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Favicon</h4>
                                        <p class="card-text">30 x 30 .png</p>
                                        <a href="#" class="btn btn-primary">Cambiar imagen</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top image-responsive" src="/admin/plugins/images/cards/3.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Favicon</h4>
                                        <p class="card-text">129 x 129 .ico</p>
                                        <a href="#" class="btn btn-primary">Cambiar imagen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                
        </div>
@endsection

@section('script')

<script src="/admin/logos/js/logos.js"></script>
@endsection