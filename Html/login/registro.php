<?php

include("conexion.php");

    /*-------Registro de docente y administrativos -----------------------*/
if(isset($_POST["btnregistrar"])){
     insertarData($conn);  
}
    
    function insertarData ($conn){
        $codigo=$_POST['codigo'];
        $idRol=$_POST['idRol'];
        $consulta = "SELECT * FROM rol where idRol='$idRol'";
        $resultado =mysqli_query($conn, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
 
            if(  $fila['CodVerificacion']==$codigo){

                  $image = $_FILES['PimgD']['tmp_name'];
                  $imagen = addslashes(file_get_contents($image));
                  $documento_id=$_POST['documento_id'];
                  $t_d_documento=$_POST['t_d_documento'];
                  $nombre=$_POST['nombre'];
                  $apellido=$_POST['apellido'];
                  $telefono=$_POST['telefono'];
                  $direccion=$_POST['direccion'];
                  $idSede=$_POST['idSede'];
                  $idJornada=$_POST['idJornada'];
                  $correo=$_POST['correo'];
                  $idRol=$_POST['idRol'];
                  $clave=$_POST['clave'];
                  $estado="Activo";
                  $codigo=$_POST['codigo'];
    
                  $consulta="INSERT INTO usuario (documento_id,t_d_documento,nombre,apellido,telefono,direccion,idSede,idJornada,correo,clave,idRol,Estado,fPerfil) value ('$documento_id','$t_d_documento','$nombre','$apellido',$telefono,'$direccion','$idSede','$idJornada','$correo','$clave','$idRol','$estado','$imagen')";
                  if(mysqli_query($conn,$consulta)){
                       echo "<script> alert ('Registrado');window.location='../../index.html'</script>";
                  }else{
                     echo "<script> alert ('No Fue posible Registrar, puede que el documento o correo ya hayan sido registrados en la plataforma ');window.location='registrar_Docente_Admini.html'</script>";
                  }
            }else{
                echo "<script> alert ('Codigo asignado incorrecto');window.location='registrar_Docente_Admini.html'</script>";
            }
        }
        
    }
    /*--------------Registro Estudiantes ----------------------------*/

    if(isset($_POST["btnregistrarEstudiante"])){
        insertarDataEstudian($conn);
    }
        
        function insertarDataEstudian ($conn){
           $image = $_FILES['Pimg']['tmp_name'];
           $imagen = addslashes(file_get_contents($image));
           $documento_id=$_POST['documento_id'];
           $t_d_documento=$_POST['t_d_documento'];
           $nombre=$_POST['nombre'];
           $apellido=$_POST['apellido'];
           $telefono=$_POST['telefono'];
           $direccion=$_POST['direccion'];
           $idSede=$_POST['idSede'];
           $idJornada=$_POST['idJornada'];
           $correo=$_POST['correo'];
           $idRol="Estudiante";
           $clave=$_POST['clave'];
           $curso=$_POST['curso'];
           $estado="Activo";
        
           $consulta="INSERT INTO usuario (documento_id,t_d_documento,nombre,apellido,telefono,direccion,idSede,idJornada,correo,clave,idRol,Estado,fPerfil) value ('$documento_id','$t_d_documento','$nombre','$apellido',$telefono,'$direccion','$idSede','$idJornada','$correo','$clave','$idRol','$estado','$imagen')";
        
           if(mysqli_query($conn,$consulta)){
               $Consul2="INSERT INTO estudiante  (documento_id,curso) value ('$documento_id','$curso')";
               if(mysqli_query($conn,$Consul2)){
                   echo "<script> alert ('Registrado');window.location='../../index.html'</script>";
               }
           }else{
               echo "<script> alert ('No Fue posible Registrar, puede que el documento o correo ya hayan sido registrados en la plataforma');window.location='registrar_Docente_Admini.html'</script>";
           }
        }
?>