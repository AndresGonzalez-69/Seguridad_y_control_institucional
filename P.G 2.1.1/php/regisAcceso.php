<?php
include ("conexion.php");
/*--------------------------Ingresar Data---------------------------*/


if(isset($_POST["btnIgres"])){
    insertarDataAcceso($conn);
}
    
    function insertarDataAcceso($conn){
       $documento_id=$_POST['documento'];
       $fecha=$_POST['fecha'];
       $tiempo=$_POST['tiempo'];
       
    
       $consulta="INSERT INTO acceso (documento_id,fecha,h_Ingreso) value ('$documento_id','$fecha','$tiempo')";
    
       if(mysqli_query($conn,$consulta)){
          /* $Consul2="INSERT INTO visitante  (documento_id,descripcion) value ('$documento_id','$Descripcion')";
           if(mysqli_query($conn,$Consul2)){*/
               echo "<script> alert ('Registro de axeso exitoso');window.location='DatosVisitantes.php'</script>";
          /* }*/
       }else{
           echo "<script> alert ('No a sido posible completar el registro');window.location='DatosVisitantes.php'</script>";
       }
    }

    /*-------------------------*/
    if(isset($_POST["btnSalida"])){
        insertarDatasalida($conn);
    }
        
        function insertarDatasalida($conn){
           $documento_id=$_POST['documento'];
           $tiempo=$_POST['tiempo'];
           
        
           $consulta="UPDATE acceso set h_salida='$tiempo' where documento_id='$documento_id'";
           
           if(mysqli_query($conn,$consulta)){
              /* $Consul2="INSERT INTO visitante  (documento_id,descripcion) value ('$documento_id','$Descripcion')";
               if(mysqli_query($conn,$Consul2)){*/
                   echo "<script> alert ('Registro de axeso exitoso');window.location='DatosVisitantes.php'</script>";
              /* }*/
           }else{
               echo "<script> alert ('No a sido posible completar el registro');window.location='DatosVisitantes.php'</script>";
           }
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
<fieldset id="IngreDataVisi">
        <legend>Igresar datos</legend>
            <form action="regisAcceso.php" method="POST">
                <br>
                <input type="text" placeholder="documento" name="documento" required>
                <br><br>
                <label for="fecha">Fecha </label> <input type="date" name="fecha" id="fecha" required>
                <br>
                <input type="time" name="tiempo" id="" required>

                <input type="submit" value="Registrar Ingreso" name="btnIgres">
            </form>
      </fieldset>
      </article>
      <!-------------------------------------------->
      <article>
      <fieldset id="IngreDataVisi">
        <legend>Igresar datos</legend>
            <form action="regisAcceso.php" method="POST">
                <br>
                <input type="text" placeholder="documento" name="documento" required>
                <input type="time" name="tiempo" id="" required>

                <input type="submit" value="Registrar salida" name="btnSalida">
            </form>
      </fieldset>
      <a href="../index.html"><button>Volver</button></a>
      </article>
</body>
</html>