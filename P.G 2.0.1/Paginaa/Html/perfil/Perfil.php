<?php include('data.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="st_Perfil.css">
    <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgMbWh4WYQH8RJ0nwKlQCL9Ob7Yb-0u9xa8Q&usqp=CAU" type="image/x-icon">
    <title>Perfil</title>
</head>
<body>
    <div id="cajaheader"></div>
    <div id="tras"></div>
    <nav>
        <ul>
                 <li><a href="../Inicio.php"><span class="primero"><i class="fas fa-male"></i></span>Inicio </a> </li>
                 <li><a href="../Herramientas/Herramientas.html"><span class="tercero"><i class="fab fa-accusoft"></i></span>Herramientas</a></li>
                 <li><a href="../camRF/camRF.html"><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Cara T/Real</a></li>
        </ul>
    </nav>
    
        <section>
              <div id="logo">
                 <img src="../../IMG/Logo1_0.png" alt="" width="200px" height="auto">
             </div>
             <br>
             <br>
             <h2 >Mi Perfil</h2>
             <hr>
             <aside>
               <h4>Mi Foto</h3>
               <td>
                <br>
                 <!-- ------------------------------------------------------------------------ -->
                 <?=cargarFoto($conn);?>
                    <!-- ------------------------------------------------------------------------------ -->
                
                
                <div id="cambiarFoto">
                   
                
                <a href="prueva2.php"><i id="camFotoP" class="fas fa-camera-retro"></i></a></div>
                     
             </aside>
             <article>
                <fieldset>
                    <legend>Informacion</legend>
                    <p><?=CargarTabla($conn);?></p>
                </fieldset>
               <br>

             <a href="./actualizar/Actualizar.html">Actulaizar</a>              
             </article>
        </section>
               <br>
               <br>
        <footer>
              <h6>
              <br>
             (c) copyright -Año 2021-Contactos:_--andcgonzalez111@misena.edu.co--diacburgos@misena.edu.co--ykpaez6@misena.edu.co--_
             </h6>
        </footer>
    

        
</body>
<script type="text/javascript" src="../javaScript/efectConsultas.js"></script> 
</html>