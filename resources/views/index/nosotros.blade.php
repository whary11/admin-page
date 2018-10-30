@extends('index.layouts.app')
    @section('contenido')

        <section class="flat-row  bg-theme section-portfolio-carousel page-hdr">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="title-section paddingleft_30">
                                <h1 class="title color-white">Sobre Nosotros</h1>
                                <div class="sub-title">
                                    Sobre Duarte & Julio Consultores
                                </div>
                            </div>
                            <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="sobre-nosotros.html">Sobre Nosotros</a></li>                            
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                        </div>
                    </div>                    
                </div>
        </section>            
    
    <main class="main-content" id="main-content">
        <div class="divider h65"></div>
        <!-- Services -->
        <section class="flat-row section-services pd-bottom6">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="page-company">
                        <div class="page-title-heading">
                            <h1 class="title">Nuestra Misión</h1>
                        </div>                             
                            <div class="content-company">
                                <p>Brindar Asesoría contable, tributaria, financiera y demás actividades con el desarrollo de la profesión de contador público de forma especializada de manera eficaz, confiable para garantizar que surjan, crezcan y permanezcan en una economía que cada día tiene retos técnicos, tecnológicos y normativos especialmente a las pequeñas y medianas empresas ubicadas en el territorio nacional.</p>
                                <p>Aportando a terceros e implicados información veraz, confiable, oportuna con el fin de toma de decisiones inteligentes, y así afianzar el desarrollo de los objetos sociales de cada empresa.</p>       
                            </div>
                        <div class="page-title-heading">
                            <h1 class="title">Nuestra Visión</h1>
                        </div>
                        <div class="content-company">
                                <p>Nuestra organización, visualiza un crecimiento conjunto en la relación cliente, consultor evolucionando conjuntamente y logrando sobresalir a mediano plazo como empresas sólidas, estructuradas y pujantes en nuestro país para de esta forma ayudar en labor social y económica de todos los implicados en este sueño de emprendimiento conjunto.</p>       
                            </div>                            
                        </div>  
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">                            
                            <div class="widget widget_contact2">
                                <h5 class="widget-title style2">Nuestro Portafolio</h5>
                                <p>Servicios profesionales contables, administrativos y financieros </p>
                                <a href="/portafolio-de-servicios"><button type="button" class="flat-button">Ver Portafolio</button></a>
                            </div><!-- /.widget-contact -->
                            <!-- <div class="widget widget_download">
                                <a href="#"><i class="fa fa-file-word-o"></i>Brochures.doc</a>
                                <a href="#"><i class="fa fa-file-pdf-o"></i>Brochures.pdf</a>
                            </div> --><!-- /.widget-download -->                            
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </main>
    
    @endsection