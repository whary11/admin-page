<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="icon/favicon.png" rel="shortcut icon">
    <title>Elite CRM Admin Template - CRM admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="/admin/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/admin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/admin/css/colors/gray-dark.css" id="theme" rel="stylesheet">    
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="/home"><b><!--This is dark logo icon--><img src="/admin/plugins/images/eliteadmin-logo.png" width="30" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/admin/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="/admin/plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="/admin/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>                    
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> 
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="/admin/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="/admin/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="/admin/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="/admin/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->
                    <li class="mega-dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Header Title</li>
                                    <li><a href="javascript:void(0)">Link of page</a> </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Header Title</li>
                                    <li><a href="javascript:void(0)">Link of page</a> </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Header Title</li>
                                    <li><a href="javascript:void(0)">Link of page</a> </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Header Title</li>
                                    <li> <a href="javascript:void(0)">Link of page</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="/admin/plugins/images/users/varun.png" width="30" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                        <li><a href="#"><i class="ti-user"></i> {{ __('Profile') }}</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> 
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="nav-small-cap m-t-10">--- Menú Principal</li>
                    <li> <a href="/home" class="waves-effect active"><i class="fa fa-desktop"></i> <span class="hide-menu"> Sobre el sitio web </span></a></li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i> <span class="hide-menu">Sobre la empresa<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="/admin/datos-contacto">Datos de contacto</a></li>
                            <li> <a href="/admin/logotipos">Logotipo</a></li>                            
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-clone"></i> <span class="hide-menu"> Páginas<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="/admin/inicio">Inicio</a> </li>
                            <li> <a href="/admin/nosotros">Sobre nosotros</a> </li>
                            <li> <a href="/admin/servicios">Portafolio de servicios</a> </li>
                            <li> <a href="/admin/contacto">Contacto</a> </li>
                            <li role="separator" class="divider"></li>                            
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bars"></i> <span class="hide-menu">Menús<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="#">Menú principal</a></li>
                            <li> <a href="#">Menú pié de página</a></li>                            
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-comment"></i> <span class="hide-menu">Blog<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="crm-leads.html">Entradas</a></li>
                            <li> <a href="crm-add-leads.html">Editar entradas</a></li>
                            <li> <a href="crm-edit-leads.html">Crear entradas</a></li>
                            <li> <a href="crm-edit-leads.html">Comentarios</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-indent"></i> <span class="hide-menu">Formularios</span></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-facebook-square"></i> <span class="hide-menu">Redes Sociales</span></a>
                    </li>                    
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bar-chart"></i> <span class="hide-menu">Analítica</span></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-search"></i> <span class="hide-menu">Posicionamiento SEO<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="crm-customers.html">Search Console</a></li>
                            <li> <a href="crm-add-customers.html">Google Ranking</a></li>
                            <li> <a href="crm-edit-customers.html">Palabras Clave</a></li>
                            <li> <a href="crm-edit-customers.html">Cambiar URL</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-edit"></i> <span class="hide-menu">Personalizar</span></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-envelope"></i> <span class="hide-menu">Correo Electrónico</span></a>
                    </li>
                    <li> <a href="widgets.html" class="waves-effect"><i class="fa fa-user"></i> <span class="hide-menu">Gestión de Usuarios</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-credit-card-alt"></i> <span class="hide-menu">Facturación</span></a>
                    </li>
                    <li> <a href="forms.html" class="waves-effect"><i class="fa fa-plus-square-o"></i> <span class="hide-menu">Servicios Adicionales</span></a>
                    </li>
                    <li> <a href="forms.html" class="waves-effect"><i class="fa fa-life-ring"></i> <span class="hide-menu">Soporte Técnico</span></a>
                    </li>                    
                    <li><a href="login.html" class="waves-effect"><i class="fa fa-sign-out "></i> <span class="hide-menu">Cerrar Sesión</span></a></li>
                    </ul>
            </div>
        </div>


@yield('contenido')






        <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
  <script src="/admin/js/sweetalert.min.js"></script>
<!-- jQuery -->
<script src="/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/admin/bootstrap/dist/js/tether.min.js"></script>
<script src="/admin/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/admin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="/admin/js/jquery.slimscroll.js"></script>
<!--Morris JavaScript -->
<script src="/admin/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="/admin/plugins/bower_components/morrisjs/morris.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- jQuery peity -->
<script src="/admin/plugins/bower_components/peity/jquery.peity.min.js"></script>
<script src="/admin/plugins/bower_components/peity/jquery.peity.init.js"></script>
<!--Wave Effects -->
<script src="/admin/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/admin/js/custom.min.js"></script>
<script src="/admin/js/dashboard1.js"></script>
<!--Style Switcher -->
<script src="/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
@yield('script')

</body>

</html>