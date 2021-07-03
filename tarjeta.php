

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACA-BUS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/ACABUS-logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

            <div class="logo float-left">
                <a href="index.php"><img src="assets/img/ACABUS.png" alt="" class="img-fluid"></a>

                  <!------------------------  Agregamos el boton de salir en nuestro apartado de navegacion para salir de la sesion 
             Para que no nos permita meternos al apartado de tarjetas si no esta logiado un usuario----------------------->            
             <?php
 
 session_start();
 #pasamos nuestra variable usuario, para que traiga el nombre del usuario en la bienvenida
 $usuario = $_SESSION['usuario'];
 
 #Ahora le decimos que  si no esta setiada !isset = osea que no encuentra un usuario registrado, que lo redireccione al login
 #esto es por seguridad, cuando en la appweb o pagina web que tengamos alguen se quiere meter al crud sin averse logeado
 #solamente poniendo en la url de nuestra pagina www.informaticaconcesar/crud-proyectos.php para que lo direccione al crud sin averse logeado
 #lo deneguemos, con nuestra variable = $usuario = $_SESSION['usuario']; por que va a buscar al usuario registrado con el que inicio sesion
 if(!isset($usuario)){
    header("location: crud-login.php");
 }else{
 
 #echo "<h9>Benvenido $usuario</h9>";
 #con esto nos cierra la secion ya no podremos entrar en el crud hasta que nos logeemos
 echo "<a href='logica/salir.php'>SALIR</a>";
 
 }
 
 ?>
            </div>
            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    
                    <li><a href="index.php">Home</a></li>
                    <li><a href="crud-login.php">Login</a></li>
                    <li class="active"><a href="#">Comprar tarjeta</a></li>
                    <li><a href="andmin-login.php">Admin</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">


            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Acerca de la tarjeta <span>ACA-BUS</span></h2>
                    <p class="animate__animated animate__fadeInUp">Al comprar esta tarjeta, te incluye como regalo $50 pesos mexicanos para que puedas viajar hasta 5 vecesen el mejor transporte publico de acapulco, ¿Que esperas? tenemos la mejor comodidad, estamos muy bien organizados y es seguro.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Ver mas</a>
                </div>
            </div>

        </div>


    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->

        <div class="text-center container">
            <h2 class="animate__animated animate__fadeInDown">Comprar tarjeta</h2><br><br>
            <img class="animate__animated animate__fadeInUp img-fluid" src="assets/img/tarjeta-acabus.png" alt=""><br><br><br>
            <br>
            <!------------------------------------- COMIENZO DEL APARTADO DE PAGO DE LA API DE PYPAL ------------------------------------->

            <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
            <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN" data-sdk-integration-source="button-factory"></script>
            <script>
                function initPayPalButton() {
                    paypal.Buttons({
                        style: {
                            shape: 'rect',
                            color: 'gold',
                            layout: 'vertical',
                            label: 'paypal',

                        },

                        createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    "description": "Tarjeta ACA-BUS",
                                    "amount": {
                                        "currency_code": "MXN",
                                        "value": 60,
                                        "breakdown": {
                                            "item_total": {
                                                "currency_code": "MXN",
                                                "value": 50
                                            },
                                            "shipping": {
                                                "currency_code": "MXN",
                                                "value": 10
                                            },
                                            "tax_total": {
                                                "currency_code": "MXN",
                                                "value": 0
                                            }
                                        }
                                    }
                                }]
                            });
                        },

                        onApprove: function(data, actions) {
                            return actions.order.capture().then(function(details) {
                                alert('Transaction completed by ' + details.payer.name.given_name + '!');
                            });
                        },

                        onError: function(err) {
                            console.log(err);
                        }
                    }).render('#paypal-button-container');
                }
                initPayPalButton();
            </script>

            <!------------------------------------- FIN DEL APARTADO DE PAGO DE LA API DE PYPAL ------------------------------------->
        </div>
        <br><br>


        <!-- End Features Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-top">
            <div class="container">
                <div class="text-center container">
                    <h3>Siguenos en:</h3>
                    <p>Nos encuentras en nuestras redes sociales como:</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ACA-BUS</span></strong>. Todos los derechos reservados
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Desarrollado por: <a href="https://informatica-with-c3sar.000webhostapp.com/">Informatica con cesar</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>