<?php
// require_once "../login/login_registrar.php";
 session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cysin";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion" .mysqli_connect_error());
}

/*-----------------------OPCION-------------------------------------------------------
 function CargarNombre($conn){
    $consulta = "SELECT nombre,apellido FROM usuario where documento_id=11111";
    $resultado =mysqli_query($conn, $consulta);

    while($fila = mysqli_fetch_array($resultado)){
     
     echo "<h3>". $fila['nombre']." ".$fila['apellido']."</h3>";

    }
 }

 function CargarDocumento($conn){
    $consulta = "SELECT documento_id FROM usuario where documento_id=11111";
    $resultado =mysqli_query($conn, $consulta);

    while($fila = mysqli_fetch_array($resultado)){
 
     echo "<h3>". $fila['documento_id']."</h3> ";

    }
 }
 */

function cargarfoto($conn){ 
   $query = "SELECT fPerfil FROM usuario WHERE documento_id='$_SESSION[doc]'";
 //   $query = "SELECT * FROM images_tabla WHERE id=27";
   $resultado = $conn->query($query);
   while($row = $resultado-> fetch_assoc()){

       echo "<button class='botonimagen'><img class='imagen'  src='data:image/jpg;base64,", base64_encode($row['fPerfil']), "'></button>";
       }
 }
 
 /*-------------------------------------------------------------------------------*/
 
 function CargarTabla($conn){
   $jun = $_SESSION['doc'];
    $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
    $resultado =mysqli_query($conn, $consulta);

    while($fila = mysqli_fetch_array($resultado)){
 
     echo "<label for=''> Rol: </label>";
     echo "<h3>". $fila['idRol']."</h3> ";
     echo "<hr>";
     echo "<label for='nombre'> Nombre: </label>";
     echo "<h3>". $fila['nombre']." ".$fila['apellido']."</h3>";
     echo "<hr>";
     echo "<label for='documento'> Documento: </label>";
     echo "<h3>". $fila['documento_id']."</h3> ";
     echo "<hr>";
     echo "<label for=''> Numero de contacto: </label>";
     echo "<h3>". $fila['telefono']."</h3> ";
     echo "<hr>";
     echo "<label for=''> Sede: </label>";
     echo "<h3>". $fila['idSede']."</h3> ";
     echo "<hr>";
     echo "<label for=''> Jornada: </label>";
     echo "<h3>". $fila['idJornada']."</h3> ";
     echo "<hr>";
     echo "<label for=''> Correo: </label>";
     echo "<h3>". $fila['correo']."</h3> ";
    }
 }
 /*-------------------------------------------------------------------------------*/

?>