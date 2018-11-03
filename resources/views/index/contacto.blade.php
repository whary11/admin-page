@extends('index.layouts.app')
    @section('contenido')
    <main class="main-content" id="main-content">
        <div class="divider h65"></div>
        <!-- Our Work -->
        <section class="flat-row pd-bottom5">
            <div class="container">
                <div class="contact-iconbox">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="iconbox">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <i class="icon-location-pin"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title">Dirección</div>    
                                    <p style="color:#000000;font-size: 20px">{{ $empresa->direccion }}<br>Bogotá - Colombia</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconbox">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title">Teléfonos</div>    
                                <p style="color:#000000;font-size: 20px">{{ $empresa->celular1}}<br>{{ $empresa->celular2}}</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconbox">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title">Email</div>    
                                    <p style="color:#000000;font-size: 20px">{{ $empresa->correo1}}<br>{{ $empresa->correo2 }}</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider h96"></div>
                <div class="contact-form-maps">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-section left">
                                <h1 class="title">Dejenos su mensaje</h1>
                                <div class="sub-title">
                                    Un consultor se comunicará en breve para atender su solicitud
                                </div>
                            </div>
                            <form id="requestform" class="flat-contact-form" method="post" action="./contact/contact-process.php" novalidate="novalidate">
                                <div class="field clearfix">      
                                    <div class="wrap-type-input clearfix">                    
                                        <div class="input-wrap name">
                                            <input type="text" value="" tabindex="1" placeholder="Nombre" name="name" id="name" required="">
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required="">
                                        </div>
                                        <div class="input-wrap phone">
                                            <input type="text" value="" placeholder="Celular" name="phone" id="phone" required="">
                                        </div> 
                                        <div class="input-wrap subject">
                                            <input type="text" value="" placeholder="Entidad" name="subject" id="subject" required="">
                                        </div>  
                                    </div>
                                    <div class="input-wrap subject">
                                        <input type="text" value="" placeholder="Servicio que requiere" name="subject" id="subject" required="">
                                    </div>
                                </div>
                                <div class="submit-wrap">
                                    <button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">ENVIAR</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>  
            </div>
            
        </section>
    </main>
    
    @endsection