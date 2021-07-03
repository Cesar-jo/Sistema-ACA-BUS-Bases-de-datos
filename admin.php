<?php
require 'logica/consulta-admin.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <link href="assets/css/styles-tabla.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">ACA-BUS</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
        </div>
        </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
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
    header("location: admin-login.php");
 }else{
 
 #echo "<h9>Benvenido $usuario</h9>";
 #con esto nos cierra la secion ya no podremos entrar en el crud hasta que nos logeemos
 echo "<a href='logica/salir-admin.php'>SALIR</a>";

 }
 
 ?>

                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard</a>
                        <div class="sb-sidenav-menu-heading">Interfas</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Paginas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Contenido
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crud-login.php">Login</a><a class="nav-link" href="crud-login.php">Register</a><a class="nav-link" href="index.php">Inicio</a></nav>
                                </div>
                               
                            </nav>
                        </div>
                        
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tablas</a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Desarrollado por:</div>
                    <a href="https://informatica-with-c3sar.000webhostapp.com/">Cesar_JO</a>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid ">
                    <h1 class="mt-4">Tabla de registros</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="admin.php">Contenido</a></li>
                        <li class="breadcrumb-item active">Tabla de registros</li>
                    </ol>
                   
                    
                    <div class="card mb-4 ">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Usuarios</div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Eliminar</th>
                                            <th>Actualizar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                       <?php
                                       foreach ($query as $row){ ?>
                                        <tr>
                                            <th><?php echo $row['id']; ?> </th>
                                            <th><?php echo $row['email']; ?> </th>
                                            <th><?php echo $row['usuario']; ?> </th>
                                            <th><?php echo $row['contraseña']; ?> </th>


                                            <th><a href="logica/eliminar-datos.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></th>
                                            <th><a href="actualizar.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Actualizar</a></th>
                                           
        </div>
    </div>
</div>
                                        
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                 <?php
                                 
                                }

                              ?>
                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Todos los derechos reservados</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>