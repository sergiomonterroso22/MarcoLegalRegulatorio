<?php 
   session_start();
   
   include "con.php";
    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

   $queryusuario="SELECT * FROM Usuarios WHERE nombreusuario = '$usuario'";
   
   $resultado=mysqli_query($conn,$queryusuario);
   if ($resultado){
   while ($row = $resultado->fetch_array()){
   $id=$row['ID'];
   $nu=$row['nombreusuario'];
   $pass=$row['password'];
   $role=$row['Roles_ID'];
   $enti=$row['Entidad_ID'];



   } //del while

//echo $role;
if($usuario != $nu or $password !=$pass) {
   header("location:../../index.php");
}
   else {
      $_SESSION['user'] = $usuario;
      //setcookie ('user',$usuario, time() + 20); //cookie por 2 minutos
      switch ($role) {

         case 1:
            header("location:auditores.php");
            break;
         case 2:
            header("location:administradores.php");
            break;
         case 3:
            header("location:clientes.php");
            break;
         }    

   }



  /* if($role == 2){
    header("location:inicio.php");
   } else {
    echo "Usuario no existe";
   }
   
   */
} //del if $resultado

   mysqli_close($conn);

//

?>