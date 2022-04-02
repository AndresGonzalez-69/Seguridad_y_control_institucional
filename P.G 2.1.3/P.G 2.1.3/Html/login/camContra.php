<?php  
include ('conexion.php');

session_start();
echo "<h1> hola".$_SESSION['Con']."</h1>";

/*------------------------------verificar contraseña-----------------------------------------*/ 
if (isset ( $_POST['btncambiar__'])){
  $contraseña=$_POST['pass'];
  if ( $_POST['pass'] == $_POST['contra']){  

        $query = mysqli_query($conn,"UPDATE usuario SET clave='$contraseña' WHERE documento_id='$_SESSION[Con]'");
        echo "<script> alert('si'); window.location='./cerra_session.php'</script>";

  }else{
        echo"<script> alert('no'); window.location='nuevacontrase.html'</script>";
  }
}
?>
