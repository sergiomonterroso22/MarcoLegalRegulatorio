<?php
session_start();
include "con.php";
$usuario = $_SESSION['user'];

$nombre=$_POST["nombreusuario"];

//Creamos la sentencia SQL
$ssql = "DELETE from Usuarios where nombreusuario='$nombre'";

// Ejecutamos la sentencia de borrado
if($conn->query($ssql)) {
  echo '<p>Usuario Eliminado</p>';
} else {
  echo '<p>Error de eliminación:' . $conn->error . '</p>';
}  
   
  mysqli_close($conn);
  header("location:borrausuario.php");
  
?>