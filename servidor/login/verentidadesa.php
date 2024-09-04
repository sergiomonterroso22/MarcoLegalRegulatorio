<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
include "con.php";

$usuario = $_SESSION['user'];

$queryent="SELECT * FROM Entidad";
$resenti=mysqli_query($conn,$queryent);

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

    <title>Ver Entidades</title>
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
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-lesft" role="navigation">
            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">                
                
                <li> <a href="audita.php"> <span>Regresar</span></a></li>  
                <li> <a href="logout.php"> <span>Cerrar Sesion</span></a></li>
          
          
            <div class="col-sm-12 col-sm-12 col-lg-12">

              <h4 class="text-left" style="color: white;" > Tabla de Entidades</h4>
              
              <div class="container">
              <div class="table-responsive table-hover" id="TablaNormativas"> 
              <table class="table">
                    <thead class="text-white">
                        <th class="text-center">Identificador de Entidad</th>
                        <th class="text-center">Nombre de Entidad</th>                       
                        <th class="text-center">Descripcion de Entidad</th>
                                             
                    </thead>
                    <tbody>
                        <?php while($rowent = $resenti->fetch_assoc()){?>              
                          
                         </tr>
                         <td class="text-center bg-light"><?php echo $rowent['ID']; ?></td>
                          <td class="text-left bg-light"><?php echo $rowent['Nombre']; ?></td>
                          <td class="text-left bg-light"><?php echo $rowent['Descripcion']; ?></td>                          
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