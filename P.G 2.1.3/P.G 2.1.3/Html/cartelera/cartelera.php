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
    <link rel="stylesheet" href="st_cartelere.css">
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
                    <li style='font-size: 18px;'><a href="../Inicio.php"><span class="primero" style='font-size: 21px;'><i class="fas fa-male"></i></span>inicio </a> </li>
                    <li style='font-size: 18px;'><a href="../profiles.html"><span class="tercero"><i class="fab fa-accusoft"></i></span>Profiles</a></li>
                    <li style='font-size: 18px;'><a href="../camRF/camRF.html"><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Cara T/Real</a>            
                    </li>
                </ul>
                <hr>
            </nav>
            <section class="home">
                <div class="in-flex">
        <div id="logo1">
                <img src="../../IMG/Logo1_0.png" alt="" width="100" >

        </div>
        <div id="logo2">
        <img src="../../IMG/PosibleLogo.png" alt="" width="100" style="float: left;">  
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
               <form action="cragarCart.php" method="post"><br>
               <input type="text" placeholder="Titulo" name="Titulo" id="Titulo" >
               <br><br>
               <textarea name="descripcion" placeholder="Descripcion" id="texto-a-ingresar" cols="20" rows="0" required></textarea><br>
               <input type="submit" value="Crear circular" name="btncreCircu" id="btncreCircu" style="margin-right: 90px;">
               </form>
               <input type="submit" value="Borrar" name="btnBoCircu" id="btnBoCircu" style="margin-left: 80px;">
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
        </section>
    </div>
    
</body>

</html>