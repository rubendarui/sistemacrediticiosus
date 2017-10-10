<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2017 14:31:08 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Katoo Credito">
    <meta name="keywords" content="Katoo Credito">
    <title>Katoo - Credito</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">    
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">
                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">katoo</span></h1></li>
                    </ul>
                  
                    <ul class="right hide-on-med-and-down">                        
                       
                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
 
                                      <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Users<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
     
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>Forms<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    
                               

                    
                  </ul>
                </div>
              </nav>

                <!-- CSSdropdown -->
                <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="css-typography.html" class="cyan-text">Typography</a></li>
                  <li><a href="css-icons.html" class="cyan-text">Icons</a></li>                  
                  <li><a href="css-shadow.html" class="cyan-text">Shadow</a></li>
                  <li><a href="css-media.html" class="cyan-text">Media</a></li>                  
                  <li><a href="css-sass.html" class="cyan-text">Sass</a></li>
                </ul>

                <!-- UIElementsdropdown-->
                <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="ui-buttons.html" class="cyan-text">Buttons</a></li>
                  <li><a href="ui-badges.html" class="cyan-text">Badges</a></li>                  
                  <li><a href="ui-cards.html" class="cyan-text">Cards</a></li>
                  <li><a href="ui-collections.html" class="cyan-text">Collections</a></li>                  
                  <li><a href="ui-accordions.html" class="cyan-text">Accordian</a></li>
                  <li><a href="ui-navbar.html" class="cyan-text">Navbar</a></li>
                  <li><a href="ui-pagination.html" class="cyan-text">Pagination</a></li>
                  <li><a href="ui-preloader.html" class="cyan-text">Preloader</a></li>
                  <li><a href="ui-modals.html" class="cyan-text">Modals</a></li>
                  <li><a href="ui-media.html" class="cyan-text">Media</a></li>
                  <li><a href="ui-toasts.html" class="cyan-text">Toasts</a></li>
                  <li><a href="ui-tooltip.html" class="cyan-text">Tooltip</a></li>
                </ul>

                <!-- Tablesdropdown -->
                <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="table-basic.html" class="cyan-text">Basic Tables</a></li>
                  <li><a href="table-data.html" class="cyan-text">Data Tables</a></li>
                </ul>

                <!-- Formsdropdown -->
                <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="form-elements.html" class="cyan-text">Form Elements</a></li>
                  <li><a href="form-layouts.html" class="cyan-text">Form Layouts</a></li>
                </ul>

                <!-- Pagesdropdown -->
                <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
                    
                    <li><a href="page-invoice.html" class="cyan-text">Invoice</a></li>
                    <li><a href="page-404.html" class="cyan-text">404</a></li>
                    <li><a href="page-500.html" class="cyan-text">500</a></li>
                    <li><a href="page-blank.html" class="cyan-text">Blank</a></li>
                </ul>

                <!-- eCommers -->
                <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="eCommerce-products-page.html"  class="cyan-text">eCommerce Products </a></li>
                    <li><a href="eCommerce-pricing.html"  class="cyan-text">Pricing Page</a></li>
                    <li><a href="eCommerce-invoice.html"  class="cyan-text">Invoice</a></li>
                </ul>

                <!-- Mediasdropdown -->
                <ul id="Mediasdropdown" class="dropdown-content dropdown-horizontal-list">                    
                    <li><a href="media-gallary-page.html"  class="cyan-text">Gallary Page</a></li>
                    <li><a href="media-hover-effects.html"  class="cyan-text">Image Hover Effects</a></li>
                </ul>

                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page.html"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login.html"  class="cyan-text">Login</a></li>
                    <li><a href="user-register.html" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
                    <li><a href="user-sesssion-timeout.html" class="cyan-text">Session Timeout</a></li>
                </ul>

                <!-- Chartsdropdown -->
                <ul id="Chartsdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="charts-chartjs.html" class="cyan-text">Chart JS</a></li>
                    <li><a href="charts-chartist.html" class="cyan-text">Chartist</a></li>
                    <li><a href="charts-morris.html" class="cyan-text">Morris Charts</a></li>
                    <li><a href="charts-xcharts.html" class="cyan-text">xCharts</a></li>
                    <li><a href="charts-flotcharts.html" class="cyan-text">Flot Charts</a></li>
                    <li><a href="charts-sparklines.html" class="cyan-text">Sparkline Charts</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav hide-on-large-only">
                <ul id="slide-out" class="side-nav leftside-navigation ">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    
              
                 
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
 
     
    
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li><a href="form-layouts.html">Form Layouts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
 
 
  
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                                <div class="collapsible-body">
                                    <ul>     
                                        <li><a href="user-profile-page.html">User Profile</a>
                                        </li>                                   
                                        <li><a href="user-login.html">Login</a>
                                        </li>                                        
                                        <li><a href="user-register.html">Register</a>
                                        </li>
                                        <li><a href="user-forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li><a href="user-lock-screen.html">Lock Screen</a>
                                        </li>                                        
                                        <li><a href="user-session-time-out.html">Session Timeout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
 
                        </ul>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                     
                    <li class="li-hover"><div class="divider"></div></li>
                 
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                      @yield('content')

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

              
 

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

 
 
                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->


        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
  
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2017 <a class="grey-text text-lighten-4" href="#" target="_blank">QUADRANT S.R.L</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">KATOO</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>  
  
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>

    <!--Alesrt-->
<script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>

   @yield('script')

   
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2017 14:32:39 GMT -->
</html>