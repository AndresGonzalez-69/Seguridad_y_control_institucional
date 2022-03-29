<?php
// -----------Conexion a base de datos-----------------------------------
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cysin";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion" .mysqli_connect_error());
}
// ---------------------------------------------------------------------------------------
session_start();

if(isset($_POST["btnHorario"])){

    
        $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
        $resultado =mysqli_query($conn, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
 
            if(  $fila['idJornada']==1){
                echo "<script> alert ('Horario de jornada Mañana');window.location='1hor_mana.html'</script>";
            }else{
                $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
                $resultado =mysqli_query($conn, $consulta);

                while($fila = mysqli_fetch_array($resultado)){
 
                    if(  $fila['idJornada']==2){
                        echo "<script> alert ('Horario de jornada Tarde');window.location='1hor_tarde.html'</script>";
                    }else{
                        echo "<script> alert ('usuario no cuenta con jornada');window.location='../InicioUsu.php'</script>";
                    }
            }
        }
    }
}




?>