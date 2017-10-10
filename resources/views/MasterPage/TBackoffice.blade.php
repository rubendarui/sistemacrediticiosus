<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Katoo Credit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="Backoffice/css/bootstrap.min.css">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="Backoffice/css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="Backoffice/css/paginacion.css" >
        
       
        <!-- Favicon-->
        <link rel="shortcut icon" href="Backoffice/img/favicon.ico">
        <!-- Font Awesome CDN-->
        <!-- you can replace it by local Font Awesome-->
        <link href="/Backoffice/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Icons CSS-->
        <link rel="stylesheet" href="Backoffice/icons.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css"/>
 
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
            -->
    </head>
    <body>
        <div class="page home-page">
            <!-- Main Navbar-->
            <header class="header">
                <nav class="navbar"> 
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <!-- Navbar Header-->
                            <div class="navbar-header">
                                <!-- INiciales del sistema -->
                                <!-- Navbar Brand -->
                                <a href="/BackofficeAdminkatoo" class="navbar-brand">
                                    <div class="brand-text brand-big hidden-lg-down">
                                        <span>Katoo </span><strong>Credito</strong>
                                    </div>
                                    <div class="brand-text brand-small">
                                        <strong>KC</strong></div>
                                </a>
                                <!-- Toggle Button-->
                                <a id="toggle-btn" href="#" class="menu-btn active">
                                    <span></span><span></span><span></span>
                                </a>
                                <!-- Fin INiciales del sistema -->
                            </div>
                            <!-- Navbar Menu -->
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                <!-- Search-->
                                <!-- Notifications-->
                                <li class="nav-item dropdown">
                                    <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                                        <i class="fa fa-bell-o"></i>
                                        <!--<span class="badge bg-red">12</span>-->
                                    </a>
                                    <ul aria-labelledby="notifications" class="dropdown-menu">
                                        <li>
                                            <a rel="nofollow" href="#" class="dropdown-item"> 
                                                <div class="notification">
<!--                                                    <div class="notification-content"><i class="fa fa-envelope bg-green"></i>No tiene Notificaciones</div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>-->
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Messages-->
                                <li class="nav-item dropdown">
                                    <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                                        <i class="fa fa-envelope-o"></i>
                                        <!--<span class="badge bg-orange">10</span>-->
                                    </a>
                                    <ul aria-labelledby="notifications" class="dropdown-menu">
                                        <li>
                                            <a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                                                <!--                                                <div class="msg-profile">
                                                                                                    <img src="Backoffice/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle">
                                                                                                </div>
                                                                                                <div class="msg-body">
                                                                                                    <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                                                                                </div>-->
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Logout    -->
                                <li class="nav-item"><a href="/Autenticacion" class="nav-link logout">Salir<i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar">
                    <!-- Sidebar Header-->
                    <div class="sidebar-header d-flex align-items-center">
                        <div class="avatar"><img src="Backoffice/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title">
                            <h1 class="h4">Mark Stephen</h1>
                            <p>Web Designer</p>
                        </div>
                    </div>
                    <!-- Sidebar Navidation Menus-->
                    <span class="heading">Menu</span>
                    <!-- Sidebar Navidation Menus subtitulo-->
                    <span class="heading">Inicio</span>
                    <ul class="list-unstyled">
                        @foreach ($titulo as $user)
                        <li><a href="#dashvariants{{ $user->id }}" aria-expanded="false" data-toggle="collapse"> <i class="{{ $user->font }}"></i> {{ $user->nombre }}</a>
                            <ul id="dashvariants{{ $user->id }}" class="collapse list-unstyled">
                                @foreach ($subtitulo as $sub)
                                @if ( $sub->padre== $user->id)
                                <li><a href="{{ $sub->url }}"> {{ $sub->nombre }}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                </nav>
                <div class="content-inner">
                    <!-- Dashboard Counts Section-->
                    @yield('contenido')
                    <!-- Page Footer-->
                    <footer class="main-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Quadrant S.R.L&copy; 2017-2019</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>Design by <a href="#" class="external">Quadrant</a></p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
          <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>  
        <script src="Backoffice/js/tether.min.js"></script>
        <script src="Backoffice/js/bootstrap.min.js"></script>
        <script src="Backoffice/js/jquery.cookie.js"></script>
        <script src="Backoffice/js/jquery.validate.min.js"></script>
        <script src="Backoffice/js/front.js"></script>
       <script src="Backoffice/js/paginacion.js"></script>

                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>  
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>  
 
 
 @yield('Abm')
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script>
(function (b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = 'Analytics/analytics.js';
    r.parentNode.insertBefore(e, r)
}(window, document, 'script', 'ga'));
ga('create', 'UA-XXXXX-X');
ga('send', 'pageview');
        </script>
    </body>
    <!-- Mirrored from demo.bootstrapious.com/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2017 01:50:20 GMT -->
</html>