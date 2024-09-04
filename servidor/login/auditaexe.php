<?php
session_start();
include "con.php";

$usuario = $_SESSION['user'];

$articulo=$_POST['articulo'];
$porcentaje=$_POST['porcentaje'];
   
  $actualizar ="UPDATE Articulos SET Cumplimiento = '$porcentaje' WHERE ID='$articulo'";

  $ejecutaractualizar=mysqli_query($conn,$actualizar);


  mysqli_close($conn);
  header("location:audita.php");
?>

  