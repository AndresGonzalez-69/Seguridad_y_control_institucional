<?php
include ('data.php');

echo(  "hola mundo");
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["img"]["tmp_name"]);
    if($revisar !==false){
       $documento=$_POST['docum'];
       $image = $_FILES['img']['tmp_name'];
       $imagen = addslashes(file_get_contents($image));
       $query = "UPDATE usuario SET fPerfil='$imagen' WHERE documento_id =('$documento')";

       $resultado = $conn->query($query);
       if($resultado){   
        echo "<script> alert ('Archivo subido correctamente .');window.location='prueva2.php'</script>";
       }else{
           echo "<script> alert ('ha fallado la subida, reintente nuevamente.');window.location='prueva2.php'</script>";
       }
//Sie el usuario no selecciona ninguna imagen 
    }else{
    echo "<script> alert ('Por favor seleccione imagen a subir.');window.location='prueva2.php'</script>";
    }
}
?>
