<?php
error_reporting(0);
session_start();
$_SESSION['doc'];
$varsesion = $_SESSION['doc'];
 if($varsesion == null || $varsesion = ''){
     
     echo 'usted no tiene autorizacion';
     die();
 }
 include('cragarCart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="st_cartelera.css">
    <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="IMG/PosibleLogo.png" type="image/x-icon">
    <title>C&S Juana Escobar</title>
</head>
<body>
   
    <div id="cuerpo">
        <header> <a name="may"></a>
            <h1>Cartelera</h1>
        </header>
        <div id="cajaheader"></div>
        <div id="tras"></div>
            <nav>
                <ul>
                    <li><a href="../Inicio.php"><span class="primero"><i class="fas fa-male"></i></span>inicio </a> </li>
                    <li><a href="../profiles.html"><span class="tercero"><i class="fab fa-accusoft"></i></span>Profiles</a></li>
                    <li><a href="../camRF/camRF.html"><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Cara T/Real</a>            
                    </li>
                </ul>
                <hr>
            </nav>
        <div id="logo1">
                <img src="../../IMG/Logo1_0.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 30px;">
        </div>
        <div id="logo2">
                <img src="../../IMG/PosibleLogo.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 1240px;">
        </div>
        
        <section>
        <aside id='ForBorCircular'>
            <fieldset>
                <form action="cragarCart.php" method="post">
                  <label for="idCircular">ID circular:</label><br>
                  <input type='text' name='idCircular'id='idCircular'><br>
                  <input type='submit' value='Eliminar' name='btnElimiCircu'>
                </form>
              </fieldset>
        </aside>
            
           <article id="sona-a-Ingresar-txt">
               <form action="cragarCart.php" method="post">
               <input type="text" placeholder="Titulo" name="Titulo" style="margin-left: 5px;">
               <textarea name="descripcion" placeholder="Descripcion" id="texto-a-ingresar" cols="20" rows="0" required></textarea>
               <input type="submit" value="Crear circular" name="btncreCircu" id="btncreCircu">
               </form>
               <input type="submit" value="Borrar" name="btnBoCircu" id="btnBoCircu">
           </article>
        
        <br>
        <hr style="width: 90%; margin-left: auto; margin-right: auto;">
        <br>
         <p style="text-align: center;">Si desea eliminar alguna circular ingrese el ID en el formulario fijado a la derecha, para hacer efectiva la eliminación dar Click en "Eliminar" <img src="../../IMG/senalador.png" style="width:80px; height:60px; "  alt=""></p> 
            <br>
            <p><?=circular($conn);?></p>
            <br>
               
        </section>
        <footer>
            <p>(c) copyright -Año 2021-Contactos:_--andcgonzalez111@misena.edu.co--diacburgos@misena.edu.co--ykpaez6@misena.edu.co--_</p>
        </footer>
        

    </div>
    
</body>

</html>