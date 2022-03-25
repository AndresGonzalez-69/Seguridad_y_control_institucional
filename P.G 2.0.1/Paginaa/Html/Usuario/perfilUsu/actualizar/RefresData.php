<?php
$server="localhost";
$usuario="root";
$contraseña="";
$bd="cysin";

$conn = mysqli_connect($server,$usuario,$contraseña,$bd)
or die ("Error en la conexion");

session_start();
if(isset($_POST["btnActualizar"])){
    actualiZAR($conn);
}
    
    function actualiZAR($conn){
        $documento_id=$_SESSION['doc'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $idSede=$_POST['idSede'];
        $idJornada=$_POST['idJornada'];
        $correo=$_POST['correo'];
    
       $consulta="UPDATE usuario  set telefono='$telefono', direccion='$direccion', idSede='$idSede', idJornada='$idJornada', correo='$correo'  where documento_id=$documento_id";
       
       if(mysqli_query($conn,$consulta)){
          /* $Consul2="INSERT INTO visitante  (documento_id,descripcion) value ('$documento_id','$Descripcion')";
           if(mysqli_query($conn,$Consul2)){*/
               echo "<script> alert ('Actualizacion de axeso exitoso');window.location='../Perfil.php'</script>";
          /* }*/
       }else{
           echo "<script> alert ('No a sido posible completar la actualizacion');window.location='Actualizar.html'</script>";
       }
    }
?>


        