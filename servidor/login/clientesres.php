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
   $entiid=$rowu['Entidad_ID'];
   } //del while
  }
 
// Perform query

$queryenti="SELECT * FROM Entidad WHERE ID = '$entiid'";

$resenti=mysqli_query($conn,$queryenti);

   if ($resenti){
   while ($rowe = $resenti->fetch_array()){
   
   $enti=$rowe['Nombre'];
  
  } //del while

  } //de if resultado

$num=1; 
$querycump="SELECT * FROM Articulos WHERE Normativas_ID = '$num'";

$resart=mysqli_query($conn,$querycump);
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

    <title>Auditores</title>
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
   
            echo "Bienvenido $usuario ($enti)";
          ?>
          
        </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">                
                

                <li class="has-children">
                  <a href="#"><span>Normativas</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">JM-104-2021</a></li>                    
                  </ul>
                </li>
                <li> 
                <li> <a href="clientesres.php"> <span>Generar Reporte</span></a></li>
                <li> <a href="llamagraph.php"> <span>Graficas</span></a></li>
                <li> <a href="logout.php"> <span>Cerrar Sesion</span></a></li>
          
          
            <div class="col-sm-12 col-sm-12 col-lg-12">
              <h4 class="text-left" style="color: white;" > Tabla de Resultados Normativa JM-104-2021</h4>
              
              <div class="container">
              <div class="table-responsive table-hover" id="TablaConsulta"> 
              <table class="table">
                    <thead class="text-white">
                        <th class="text-center">Numero de Articulo</th>
                        <th class="text-center">Nombre de Articulo</th>                       
                        <th class="text-center">Porcentaje de cumplimiento</th>
                                             
                    </thead>
                    <tbody>

                        <?php while($rowa = $resart->fetch_assoc()){?>
                         
                          
                         </tr>
                          <td class="text-left bg-light"><?php echo $rowa['ID']; ?></td>
                          <td class="text-left bg-light"><?php echo $rowa['Nombre']; ?></td>
                          <td class="text-center bg-light"><?php echo $rowa['Cumplimiento']; ?></td>
                         </tr>
                         
                         
                         <?php } ?> 
                     </tbody>
                </table>
              </div>
            </div> 
              
          </div>   
                  
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