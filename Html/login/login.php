<?php

include("conexion.php");

#login
session_start();
$documento=$_POST['documento'];
$_SESSION['doc']=$documento;

 /*--------------INICIO DE SESION--------------------------------*/
if(isset($_POST["btningresar"])){
    //GLOBAL $documento;
   // $documento=$_POST['documento'];
    
    $query = mysqli_query($conn,"SELECT * FROM usuario WHERE documento_id='$_SESSION[doc]'/* AND clave='$pass'*/");
    $nr=mysqli_num_rows($query);
  if(isset($_COOKIE["block".$documento])){
    echo "<script> alert('demasiados intentos erróneos el sistema se ha bloqueado, intente más tarde.'); window.location='../../index.html'</script>";
  }else{ 
    if($nr==1){
        $pass=$_POST['pass'];
        $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
        $resultado =mysqli_query($conn, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
 
            if(  $fila['clave']==$pass){
                $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
                $resultado =mysqli_query($conn, $consulta);

                while($fila = mysqli_fetch_array($resultado)){

                    if($fila['Estado']=='Activo'){ 

                        $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
                        $resultado =mysqli_query($conn, $consulta);

                        while($fila = mysqli_fetch_array($resultado)){
                            if($fila['documento_id']==11111 || $fila['documento_id']== 1002555408 || $fila['documento_id']== 1010037176){
                                echo "<script> alert('Bienvenido Administrador'); window.location='../Inicio.php'</script>";
                            }else{
                                echo "<script> alert('Bienvenido Usuario'); window.location='../Usuario/InicioUsu.php'</script>";
                            }
                        }
                    }else{
                        echo "<script> alert('Estimado usuario en este momento usted esta (Inactivo) en la plataforma acérquese a coordinación para cambiar su estado.'); window.location='../../index.html'</script>";
                    }
                }
                 
            }else{
                // ---------verificara el estado de usuario------------------------------------------------
                $consulta = "SELECT * FROM usuario where documento_id=' $_SESSION[doc]'";
                $resultado =mysqli_query($conn, $consulta);
                while($fila = mysqli_fetch_array($resultado)){
                    
                    if($fila['Estado']=='Inactivo'){ 
                        echo "<script> alert('Estimado usuario en este momento usted esta (Inactivo) en la plataforma acérquese a coordinación para cambiar su estado.'); window.location='../../index.html'</script>";
                    }else{ 
                        // -----Contara los intento de ingreso con contraceña erronea y si los supera incativara al usuario--------
                        if(isset($_COOKIE["$documento"])){
                            $cont =$_COOKIE["$documento"];
                            $cont++;
                            setcookie($documento,$cont,time()+120);
                            if($cont >=3){
                                $query = mysqli_query($conn,"UPDATE usuario SET Estado='Inactivo' WHERE documento_id='$documento'");
                                echo "<script> alert('Usuario bloqueado, diríjase a coordinación para que sea habilitado nuevamente.'); window.location='../../index.html'</script>";

                            }else{
                                echo "<script> alert('Contraseña Incorrecta'); window.location='../../index.html'</script>";
                            }
                        }else{
                            setcookie($documento,1,time()+60);
                            echo "<script> alert('Contraseña Incorrecta'); window.location='../../index.html'</script>";
                        }
                        // -----------------------------------------------------------------------------------------------------
                    }
                    // -------------------------------------------------------------------------------------------------
               }
     
            }
        }     
    }else{
        //------------ contara los intentos de ingreso de usuario inexistente y se bloquera temporalmente ----------------------
        if(isset($_COOKIE["$documento"])){
            $cont =$_COOKIE["$documento"];
            $cont++;
            setcookie($documento,$cont,time()+120);
            if($cont>=3){
                setcookie("block".$documento,$cont,time()+300);
                echo "<script> alert('demasiados intentos erróneos el sistema se ha bloqueado, intente más tarde.'); window.location='../../index.html'</script>";
            }else{
                echo "<script> alert('Usuario no existe'); window.location='../../index.html'</script>";
            }
        }else{
            setcookie($documento,1,time()+120);
            echo "<script> alert('Usuario no existe'); window.location='../../index.html'</script>";
        }
        // ---------------------------------------------------------------------------------------
    }
  } 
}


?>