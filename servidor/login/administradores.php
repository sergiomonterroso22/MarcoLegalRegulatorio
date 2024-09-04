<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
include "con.php";

$usuario = $_SESSION['user'];


$queryusuario="SELECT * FROM Usuarios WHERE nombreusuario = '$usuario'";

   
   $resultado=mysqli_query($conn,$queryusuario);
   if ($resultado){
   while ($rowu = $resultado->fetch_array()){
   
   $nu=$rowu['nombreusuario'];
   $role=$rowu['Roles_ID'];
   $enti=$rowu['Entidad_ID'];
   } //del while
  }
 
// Perform query

$queryrol="SELECT * FROM Roles WHERE ID = '$role'";

$resrol=mysqli_query($conn,$queryrol);

   if ($resrol){
   while ($rowr = $resrol->fetch_array()){
   
   $rol=$rowr['Rol'];
   
  } //del while


  } //de if resultado
  mysqli_close($conn);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Administradores</title>
    <style>
    body {
      background-color: DodgerBlue;
    }
  </style>
  </head>
  <body>
 
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <h1 class="mb-0 site-logo"><a href="#" class="text-white mb-0"><?php
   
            echo "Bienvenido $usuario ($rol)";
          ?>
          
        </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">                
                <li class="has-children">
                  <a href="#"><span>Usuarios</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="verusuarios.php">Ver Usuarios</a></li>
                    <li><a href="creausuarios.php">Crear Usuario</a></li>
                    <li><a href="borrausuario.php">Eliminar Usuario</a></li>                                      
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#"><span>Entidades</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="verentidades.php">Ver Entidades</a></li>
                    <li><a href="crearentidad.php">Crear Entidad</a></li>
                    <li><a href="eliminarentidad.php">Eliminar Entidad</a></li>                                      
                  </ul>
                </li>
                
                <li class="has-children">
                  <a href="#"><span>Normativas</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="vernormativas.php">Ver Normativas</a></li>
                    <li><a href="crearnormativa.php">Crear Normativa</a></li>
                    <li><a href="eliminanormativa.php">Eliminar Normativa</a></li>                                      
                  </ul>
                </li>
                <li><a href="logout.php"><span>Cerrar Sesion</span></a></li>  
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>