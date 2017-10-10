<!DOCTYPE HTML>
<!--
        Dimension by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Dimension by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="Frontoffice/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <noscript><link rel="stylesheet" href="Frontoffice/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="Frontoffice/css/bootstrap.min.css"  > 

        <link rel="stylesheet" href="Frontoffice/sleder/bootstrap-slider.css"  > 
        <link rel="stylesheet" href="Frontoffice/sleder/bootstrap-slider.min.css"  > 
    </head>
    <body>

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <div class="logo">
                    <span class="icon fa-usd"></span>
                </div>
                <div class="inner">
                    <h1>100%</h1>
                    <p>SEGURO Y SIN COMPLICACIONES </p>
                </div>
                <div class="content">
                    <div class="inner">
                        <h1>Katoo Credito</h1>
                        <p>Plataforma de credito online,rápido,fácil,transparente y Seguro<br />
                            Tienes la posibilidad de un crédito de hasta Bs. 10,500.00 por ser un cliente frecuente.</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#cot">Solicitar ahora</a></li>
                        <li><a href="#qn">Que necesita?</a></li><li>
                            <a href="#CoF">Como funciona?</a></li>
                        <li><a href="#contact">Contactanos</a></li>
                        <li><a href="#ecomerce">Prodcutos a Credtio</a></li>
                        <!-- Main <li><a href="#elements">Elements</a></li>  -->  					</ul>
                </nav>
            </header>

            <!-- Main -->
            <div id="main">

                <!-- Intro -->
                <article id="cot">
                    <h2 class="major">Préstamos en línea !</h2>

                    <input id="ex6" type="text" data-slider-min="0" data-slider-max="10000" data-slider-step="1" data-slider-value="0"/>
                    <span id="ex6CurrentSliderValLabel">Monto total: <span id="ex6SliderVal">0</span></span>

                    <br>

                    <input id="ex7" type="text" data-slider-min="0" data-slider-max="10000" data-slider-step="1" data-slider-value="0"/>

                    <span id="ex7CurrentSliderValLabel">Tiempo del prestamo: <span id="ex7SliderVal">0</span></span>

                </article>

                <!-- Work -->
                <article id="qn">
                    <h2 class="major">Que necesita?</h2>
                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Primary card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>


                </article>

                <!-- About -->
                <article id="CoF">
                    <h2 class="major">Como funciona?</h2>

                </article>

                <!-- Contact -->
                <article id="contact">
                    <h2 class="major">Contactanos</h2>
                    <form method="post" action="#">
                        <div class="field half first">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="celular">celular</label>
                            <input type="text" name="celular" id="celular" />
                        </div>
                        <div class="field">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar Mensaje" class="special" /></li>

                        </ul>
                    </form>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

                    </ul>
                </article>

                <!-- Elements -->
                <article id="ecomerce">
                    <h2 class="major">Comercio electronico con Katoo.com.bo</h2>
                </article>

            </div>

            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; Quadrant S.R.L.</p>
            </footer>

        </div>

        <!-- BG -->
        <div id="bg"></div>

        <!-- Scripts  Frontoffice/sleder/-->


        <script src="Frontoffice/js/jquery.min.js"></script>
        <script src="Frontoffice/js/skel.min.js"></script>
        <script src="Frontoffice/js/util.js"></script>
        <script src="Frontoffice/js/main.js"></script>
        <script src="Frontoffice/js/popper.min.js"  ></script>
        <script src="Frontoffice/js/bootstrap.min.js"  ></script>
        <script src="Frontoffice/sleder/bootstrap-slider.min.js"  ></script>
        <script src="Frontoffice/sleder/bootstrap-slider.js"  ></script>

        <script type="text/javascript">

            // With JQuery
       // With JQuery
            $("#ex6").slider();
            $("#ex6").on("slide", function (slideEvt) {
                $("#ex6SliderVal").text(slideEvt.value);
            });
       // With JQuery
            $("#ex7").slider();
            $("#ex7").on("slide", function (slideEvt) {
                $("#ex7SliderVal").text(slideEvt.value);
            });
        </script>

    </body>
</html>
