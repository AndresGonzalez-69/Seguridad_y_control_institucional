<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cysin";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion" .mysqli_connect_error());
}
/*----------------------------------Tabla SECRETARIA-------------------------------------------------------------------------*/
function tatle1($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=190774844  ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
// ---------------------------------------Secretaria------------------------------------------------------
function datosSecretaria($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido FROM usuario  WHERE idRol='Secretaria'" ;
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre: </label>" ;
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>" ;
     echo "<hr>";
     
     
    }
 }

//  ---------------------------------------Orientacion-----------------------------------------------------
function datosOrientacion($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido FROM usuario  WHERE idRol='Orientación'";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }

// -------------------------------------Seguridad--------------------------------------------------------------
function datosSeguridad($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido FROM usuario  WHERE idRol='Seguridad'";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }


// ---------------------------------------Servicios Generalez-------------------------------------------------------
function datosServiciosGenerales($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido FROM usuario  WHERE idRol='Sgenerales'";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }
 ?>