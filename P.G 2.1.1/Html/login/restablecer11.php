<?php
include("conexion.php");
/*----------------------------Generar codigo rando-----------------------------------------------*/
session_start();


if(isset($_POST["btngenerar"])){

  $documento=$_POST['documento'];
  $_SESSION['Con']=$documento;

   $query = mysqli_query($conn,"SELECT * FROM usuario WHERE documento_id='$_SESSION[Con]'");
   $nr=mysqli_num_rows($query);
        if($nr==1){
          $codigo=rand(100000,200000);
          $query = mysqli_query($conn,"UPDATE usuario SET codigo='$codigo' WHERE documento_id='$_SESSION[Con]'");
          echo "<script> alert('El codigo de verificacion hasido enviado al correo es $codigo'); window.location='RecuContra1.html'</script>";
        }
        else{
            echo "<script> alert('No se halla documento en base de datos'); window.location='RecuContra1.html' </script>";
         }      
}
/*-------------------------codigo---------------------------------------------------------------------*/

if (isset($_POST["btnverificar"])){
    $codigo=$_POST['codigo'];
    $consulta = "SELECT * FROM usuario WHERE documento_id='$_SESSION[Con]'";
    $resultado =mysqli_query($conn, $consulta);

    while($fila = mysqli_fetch_array($resultado)){

      if($codigo==$fila['codigo']){
        echo "<script> alert('El codigo de verificacion es correcto'); window.location='nuevacontrase.html'</script>";
      }
      else{
        echo "<script> alert('El codigo de verificacion es incorrecto'); window.location='RecuContra1.html' </script>";
      } 

    }

}     

?>
