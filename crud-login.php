

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Inicio de secion</title>

        <head>
            <meta charset="UTF-8">
            <title>Inicio de sesion</title>
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        </head>
        <link rel="stylesheet" href="assets/css/style-crud-login.css">

        <!-- Favicons -->
        <link href="assets/img/ACABUS-logo.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body class="bodylogin">

        <!-- ======= Header ======= -->
        <header class="header" class="fixed-top header-transparent">
            <div class="container">

                <div class="logo float-left">
                    <a href="index.php"><img src="assets/img/ACABUS.png" alt="" class="img-fluid"></a>
                </div>

                <nav class="nav-menu float-right d-none d-lg-block">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#">Login</a></li>
                        <li><a href="tarjeta.php">Comprar tarjeta</a></li>
                        <li><a href="admin-login.php">Admin</a></li>
                        

                    </ul>
                </nav>
                <!-- .nav-menu -->

            </div>
        </header>
        <!-- End Header -->




        <!-- partial:index.partial.html -->
        <section class="forms-section">
            <h1 class="section-title">Bienvenido, Porfavor inicie sesión o registrese</h1>
            <div class="forms">
                <div class="form-wrapper is-active">
                    <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
                    <form class="form form-login" action="logica/logear.php" method="POST">
                        <fieldset>
                            <legend>Porfvor ingrese su usuario.</legend>
                            <div class="input-block">
                                <label for="login-email">Usuario</label>
                                <input id="login-email" name='usuario' required placeholder='Username' type='text'>
                            </div>
                            <div class="input-block">
                                <label for="login-password">Password</label>
                                <input id="login-password" name="contraseña" type="password" required>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn-login">Entrar</button>
                    </form>
                </div>
                <div class="form-wrapper">
                    <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>
                    <form class="form form-signup" action="logica/guardar.php" method="POST">
                        <fieldset>
                            <legend>Please, ingrese usuario, email, y contraseña para registrarse.</legend>
                        
                            <div class="input-block">
                                <label for="signup-password">E-mail</label>
                                <input id="signup-password"name='email' required placeholder='Correo' type='email'>
                            </div>

                            <div class="input-block">
                                <label for="signup-email">Usuario</label>
                                <input id="signup-email" name='usuario' required placeholder='Username' type='text'>
                            </div>

                            <div class="input-block">
                                <label for="signup-password-confirm">Password</label>
                                <input id="signup-password-confirm" type="password" required name="contraseña" placeholder="Contraseña" type="password">
                            </div>
                        </fieldset>
                        <button type="submit" class="btn-signup">Registrar</button>
                    </form>
                </div>
            </div>
        </section>

        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>ACA-BUS</span></strong>. Todos los derechos reservados
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                    Desarrollado por: <a href="https://informatica-with-c3sar.000webhostapp.com/">Cesar_jo</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- partial -->
        <script src="assets/js/script.js"></script>

        

    </body>

    </html>