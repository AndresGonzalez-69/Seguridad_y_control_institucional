
    <?php
    include ('conexion.php');

/*------------------------Eliminar Data---------------------------------------------------------------*/
if(isset($_POST["btnEliminar"])){
         ElimiData($conn); 
}
    
    function ElimiData($conn){

        $documento=$_POST['documento'];
    
        $consulta="DELETE FROM visitante WHERE documento_id='$documento'";
        if(mysqli_query($conn,$consulta)){
            $Consul2="DELETE FROM usuario WHERE documento_id='$documento'";
            if(mysqli_query($conn,$Consul2)){
                echo "<script> alert ('El usuario a sido eliminado ');window.location='DatosVisitantes.php'</script>";
            }
            
        }else{
            echo "<script> alert ('No a sido posible completar el proceso');window.location='DatosVisitantes.php'</script>";
        }
    }

/*--------------------------Ingresar Data---------------------------*/


if(isset($_POST["btnIgres"])){
    insertarDataVisi($conn);
}
    
    function insertarDataVisi($conn){
       $documento_id=$_POST['documento'];
       $t_d_documento=$_POST['t_d_documento'];
       $nombre=$_POST['nombre'];
       $apellido=$_POST['apellido'];
       $telefono=$_POST['telefono'];
       $direccion=$_POST['direccion'];
       $idSede=$_POST['idSede'];
       $idJornada=$_POST['idJornada'];
       $idRol="Visitante";
       $Descripcion=$_POST['descripcion'];
       $Estado="Activo";
    
       $consulta="INSERT INTO usuario (documento_id,t_d_documento,nombre,apellido,telefono,direccion,idSede,idJornada,idRol,Estado) value ('$documento_id','$t_d_documento','$nombre','$apellido',$telefono,'$direccion','$idSede','$idJornada','$idRol','$Estado')";
    
       if(mysqli_query($conn,$consulta)){
           $Consul2="INSERT INTO visitante  (documento_id,descripcion) value ('$documento_id','$Descripcion')";
           if(mysqli_query($conn,$Consul2)){
               echo "<script> alert ('El Visitante a sido registrado exitosamente');window.location='DatosVisitantes.php'</script>";
           }
       }else{
           echo "<script> alert ('No a sido posible completar el registro');window.location='DatosVisitantes.php'</script>";
       }
    }







    ?>
