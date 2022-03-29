<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cysin";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion" .mysqli_connect_error());
}

/*------------Funcion cargar foto de perfil------------------------------------------------------------*/

function cargarfoto($conn){ 
    $personal=$_POST["personal"];
    $query = "SELECT fPerfil FROM usuario WHERE documento_id='$personal'";
  //   $query = "SELECT * FROM images_tabla WHERE id=27";
    $resultado = $conn->query($query);
    while($row = $resultado-> fetch_assoc()){
 
        echo "<button class='botonimagen'><img class='imagen'  src='data:image/jpg;base64,", base64_encode($row['fPerfil']), "'></button>";
        }
  }

/*-------------Funcion de cargar nombre del perfil-------------------------------------------------------*/
function cargarTitulo($conn){
    $personal=$_POST["personal"];
     $consulta = "SELECT * FROM usuario where documento_id='$personal'";
     $resultado =mysqli_query($conn, $consulta);
 
     while($fila = mysqli_fetch_array($resultado)){
  
      echo "<h2>". $fila['nombre']."</h2>";
     
     }
  }
/*---------------------Funcion de cargar tabla de informacion del perfil-----------------------------------------------*/
function CargarTabla($conn){
    $personal=$_POST["personal"];
     $consulta = "SELECT * FROM usuario where documento_id='$personal'";
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


  ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="st_perfil_Academico.css">
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
                 <li><a href=""><span class="segundo"><i class="fas fa-balance-scale"></i></span>Notificaciones</a></li>
                 <li><a href="../configuracion.html"><span class="tercero"><i class="fab fa-accusoft"></i></span>Configuracion</a></li>
                 <li><a href="../camRF/camRF.html"><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Cara T/Real</a></li>
        </ul>
    </nav>
    
        <section>
              <div id="logo">
                 <img src="../../IMG/Logo1_0.png" alt="" width="200px" height="auto">
             </div>
             <br>
             <br>
              <h2 id="titulo">Perfil de <?=cargarTitulo($conn);?></h2> 
             <hr>
             <aside>
               <h4>Foto</h3>
               <td>
                <br>
                <?=cargarFoto($conn);?>
                
                <div id="cambiarFoto"><a href=""><i id="camFotoP" class="fas fa-camera-retro"></i></a></div>
                     
             </aside>
             <article>
                <fieldset>
                    <legend>Informacion</legend>
                    <p><?=CargarTabla($conn);?></p>
                </fieldset>
               <br>

                    <a href="../profiles.html">Volver</a>     
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
