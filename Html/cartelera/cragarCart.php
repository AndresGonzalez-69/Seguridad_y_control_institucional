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

// -----------------------------------------CArgar circular a base de datos ---------------------------------------------------------
if(isset($_POST["btncreCircu"])){
    crearCircular($conn);  
}
   
   function crearCircular($conn){
                 $titulo=$_POST['Titulo'];
                 $descripcion=$_POST['descripcion'];
   
                 $consulta="INSERT INTO cartelera (descripcion,titulo) value ('$descripcion','$titulo')";
                 if(mysqli_query($conn,$consulta)){
                      echo "<script> alert ('Circular creada');window.location='cartelera.php'</script>";
                 }else{
                    echo "<script> alert ('No Fue posible crear la circular');window.location='cartelera.php'</script>";
                 }
       }


// -------------------------------Mostrar circulares de base de datos --------------------------------------------------------------------
function circular($conn){
    $consulta ="   SELECT * FROM cartelera ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){

        echo "<br>";
        echo "<article class='circular'>";
        echo "<hr>";
        echo "<h6>". $fila['fecha']."</h6> ";
        
        echo "<h2>". $fila['Titulo']."</h2>";
        
        echo "<p style='max-width: 100%; text-align: center;'>". $fila['descripcion']."</p>";
        echo "<br>";
        echo "<hr>";
        echo "<hr>";
        echo "<br>";
        echo "<p style='color: rgb(89, 98, 98);'> ID ". $fila['idCircular']."</p> ";
        
        echo "</article>";
        echo "<br>";
        
    }
 }
// --------------------------------Eliminar Circular-----------------------------------------------

if(isset($_POST["btnElimiCircu"])){
    EliminarCircular($conn);  
}

function Eliminarcircular($conn){
    $idCircular=$_POST["idCircular"];
    
    $consulta="DELETE FROM cartelera WHERE idCircular='$idCircular'";
    
     if(mysqli_query($conn,$consulta)){
            echo "<script> alert ('La circular ha sido eliminada');window.location='cartelera.php'</script>";
     }else{
        echo "<script> alert ('No ha sido posible eliminar la circular');window.location='cartelera.php'</script>";
     }
 }
?>