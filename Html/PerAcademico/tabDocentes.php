
<?php include('funCargartabla.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Academico</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgMbWh4WYQH8RJ0nwKlQCL9Ob7Yb-0u9xa8Q&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" href="st_TablasCurso.css">
    <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="cajaheader"></div>
        <div id="tras"></div>
        <nav>
                <ul>
                    <li style='font-size: 18px;'><a href="../Inicio.php"><span class="primero" style='font-size: 21px;'><i class="fas fa-male"></i></span>inicio </a> </li>
                    <li style='font-size: 18px;'><a href="../Herramientas/Herramientas.html"><span class="tercero"><i class="fab fa-accusoft"></i></span>Herramientas</a></li>
                    <li style='font-size: 18px;'><a href="../camRF/camRF.html"><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Cara T/Real</a></li>
                </ul>
                <hr>
        </nav>
    
        <div id="cuerpo">
        <div id="logo">
            <img src="../../IMG/Logo1_0.png" alt="" width="170px" height="auto">
        </div>
        <header >
            <h1>Docentes</h1>
        </header>
        <a href="../profiles.html" id="btnAtras"><input type="submit" value="Atras" ></a> <hr><br>
   <br><br><br><br>
        <section>
        <!-------------------------------------------------------------------------------------------------->
         <article id="a" style="margin-left:425px;">
            <fieldset>
            <form action="AcademicPerfil.php" method="post">
                <p><?=datosDocentes($conn);?></p>
             </form>
            </fieldset>
        </article>
        <!-------------------------------------------------------------------------------------------------->
       </section>
       
    <footer>
        <h6>
       (c) copyright -Año 2021-Contactos:_--andcgonzalez111@misena.edu.co--diacburgos@misena.edu.co--ykpaez6@misena.edu.co--_
       </h6>
  </footer>
</body>
<script type="text/javascript" src="./Transicions.js"></script> 
</html>