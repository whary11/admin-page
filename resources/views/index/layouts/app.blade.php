<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Duarte y Julio Consultores</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="icon" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="icon">
    <link href="icon/favicon.png" rel="shortcut icon">
        
</head>                                 
<body class="header_sticky page-loading"> 
    <!-- Preloader -->
    <div class="loading-overlay">
    </div>  

    <!-- Boxed -->
    <div class="boxed">

        <div class="flat-top style2">
            <div class="container">
                <div class="row">  
                    <div class="col-md-6">
                        <ul class="flat-information">
                            <li class="phone"><a>Llámenos: {{$empresa->celular1}} - {{$empresa->celular2}}</a></li>
                            <li class="email"><a href="mailto:financiera@duarteyjulio.com">Email: {{$empresa->correo1}}</a></li>
                        </ul>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <ul class="box-text text-right">
                            <li class="question"><p>Declaración de Renta</p></li>
                            <li class="box"><a href="/contacto">Solicite Asesoria</a></li>
                        </ul>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.top -->

        <div class="flat-header-wrap">
            <!-- Header -->            
            <header id="header" class="header header-v1 style3 widget-header clearfix">
                <div class="container">
                    <div class="row">                 
                        <div class="header-wrap clearfix">
                            <div class="col-md-3">
                                <div id="logo" class="logo">
                                    <a href="/" rel="home">
                                        <img src="images/logo.svg" alt="logo duarte y julio consultores">
                                    </a>
                                </div><!-- /.logo -->
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button --> 
                            </div>
                            <div class="col-md-9">
                                <div class="flat-wrap-header">
                                    <div class="nav-wrap">        
                                        <nav id="mainnav" class="mainnav">
                                            <ul class="menu"> 
                                                <li class="active"><a href="/">INICIO</a></li>
                                                <li><a href="/sobre-nosotros">SOBRE NOSOTROS</a></li>
                                                <li><a href="/portafolio-de-servicios">PORTAFOLIO DE SERVICIOS</a>
                                                    <!-- <ul class="submenu"> 
                                                        <li><a href="services.html">Services Version1</a></li>
                                                        <li><a href="services-v2.html">Services Version2</a></li>
                                                        <li><a href="services-sidebar.html">Services Right Sidebar</a></li>
                                                        <li><a href="services-single.html">Services Single</a></li>
                                                    </ul> -->
                                                </li>
                                                <li><a href="/contacto">CONTACTENOS</a></li>                       
                                            </ul><!-- /.menu -->
                                        </nav><!-- /.mainnav -->   
                                    </div><!-- /.nav-wrap -->
                                </div>
                            </div>                      
                        </div><!-- /.header-wrap -->                 
                    </div><!-- /.row -->
                </div>
            </header><!-- /.header -->
        </div>

        @yield('contenido')



        <footer id="footer" class="footer main-footer" data-fixed="true" itemscope="itemscope">        
                <div class="footer-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="logo-footer">
                                    <div id="logo-footer" class="logo">
                                        <a href="/" rel="home">
                                            <img src="images/logo2.svg" width="200" height="81" alt="Logo D&J Consultores">
                                        </a>
                                    </div><!-- /.logo -->
                                </div>
                                <div class="copy-right">
                                    <p>© 2018 D&J Grupo de Consultores Duarte y Julio. Todos los derechos reservados</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="social-links style2">
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
                <!-- Go Top -->
                <a class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>       
            </div>
            <!-- Javascript -->
            <script src="javascript/jquery.min.js"></script>
            <script src="javascript/bootstrap.min.js"></script> 
            <script src="javascript/jquery.easing.js"></script> 
            <script src="javascript/imagesloaded.min.js"></script>  
            <script src="javascript/jquery-waypoints.js"></script> 
            <script src="javascript/jquery-countTo.js"></script>
            <script src="javascript/jquery.isotope.min.js"></script>
            <script src="javascript/owl.carousel.js"></script>
            <script src="javascript/jquery-validate.js"></script>
            <script src="javascript/jquery.cookie.js"></script>
            <script src="javascript/jquery.magnific-popup.min.js"></script> 
            <script src="javascript/html5shiv.js"></script>
            <script src="javascript/respond.min.js"></script>  
            <script src="javascript/jquery.fancybox.js"></script>  
            <script src="javascript/main.js"></script>
            <script src="javascript/app.js"></script>
            <!-- Revolution Slider -->
            <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
            <script src="revolution/js/slider.js"></script>
            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
            <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
        </body>
        </html>