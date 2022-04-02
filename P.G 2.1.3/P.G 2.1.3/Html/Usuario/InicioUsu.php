<?php
// --------------------------------------------------------
error_reporting(0);
session_start();
$_SESSION['doc'];
$varsesion = $_SESSION['doc'];
 if($varsesion == null || $varsesion = ''){
     
     echo 'usted no tiene autorizacion';
     die();
 }
// ------------------------Conexion a base de datos --------------------------------------

session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cysin";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion" .mysqli_connect_error());
}
// -------------------------------cargar circulares -------------------------------
function circular($conn){
    $consulta ="   SELECT * FROM cartelera ";
    $resultado =mysqli_query($conn, $consulta);
    $nr=mysqli_num_rows($resultado);
    if($nr==0){
        echo "<h4 style='font-size: 30px; text-align: center;'> no hay eventos programasdos </h4>";
    }else{

    
    
    while($fila = mysqli_fetch_array($resultado)){

        echo "<br>";
        echo "<article class='circular'>";
        echo "<hr>";
        echo "<h6>". $fila['fecha']."</h6> ";
        
        echo "<h2>". $fila['Titulo']."</h2>";
        
        echo "<p>". $fila['descripcion']."</p> ";
        echo "<br>";
        echo "<hr>";
        echo "<hr>";
        echo "</article>";
        echo "<br>";
        
    }
   }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="st_InicioUsu.css">
    <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="IMG/PosibleLogo.png" type="image/x-icon">
    <title>C&S Juana Escobar</title>
</head>
<body>
   
    <div id="cuerpo">
        <header> <a name="may"></a>
            <h1>CYSI usuario</h1>
        </header>
        <div id="cajaheader"></div>
        <div id="tras"></div>
            <!-- <nav>
                <ul >
                    <li><a href="perfil/Perfil.php"><span class="primero"><i class="fas fa-male"></i></span>Mi perfil </a> </li>
                    <li><a href=""><span class="segundo"><i class="fas fa-bell"></i></span>Notificaciones</a></li>
                    <li><a href="./camRF/camRF.html"><span class="tercero"><i class="fas fa-camera"></i></span> Cara T/Real</a></li>
                    <li><a href=""><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Horarios del sistema</a>
                        <ul>
                            <li id="JMA"><a href="1hor_mana.html">J.M</a></li>
                            <li><a href="1hor_tarde.html">J.T</a></li>
                        </ul>
                    </li>
                </ul>
                <hr>
            </nav> -->
        <div id="logo1">
                <img src="IMG/Logo1_0.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 30px;">
        </div>
        <aside>
            <div id="sidemenu" class="menu-collapsed">
                <!--Header-->
                <div id="header">
                    <div id="title"><span>Menu</span></div>
                    <div id="menu-btn">
                        <div class="btn-hamburger"></div>
                        <div class="btn-hamburger"></div>
                        <div class="btn-hamburger"></div>
                    </div>
                </div>
                <!--Perfil-->
                <div id="profile">
                    <div id="photo"><img src="IMG/Opciones.png" alt="" ></div>
                    <div id="name"><span>Opciones</span></div>
                </div>
                <!--Items-->
                <div id="menu-items">
                    <div class="item">
                        <a href="perfilUsu/Perfil.php">
                            <div class="icon"><img src="IMG/PerAcademico.png" alt="" style="border-radius:50%; width:30px; height: 30px;"></div>
                            <div class="title"><span>Perfil</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                    <div class="item">
                        <form  action="./horarios/Horarios.php"  method="POST">
                        <button  name="btnHorario">
                             <a href="">
                                 <div class="icon"><img src="./IMG/Horarios.png" alt="" ></div>
                                 <div class="title"><span style="font-family: Arial;">Horarios</span></div>
                             </a>
                        </button>
                        </form>
                    </div>
    
                    <div class="item-separador"></div>
    
                    <div class="item">
                        <a href="">
                            <div class="icon"><img src="" alt=""  width="30px" height="30px"></div>
                            <div class="title"><span>---------</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                    <div class="item">
                        <a href="cerrarSESION.php">
                            <div class="icon"><img src="IMG/cerrarsesion.png" alt=""  width="30px" height="30px"></div>
                            <div class="title"><span>Cerrar sesion</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                </div>
            </div>
    
        </aside>
        <section>
        <hr style="width: 90%; margin-left: auto; margin-right: auto;">
            <br>
            <?=circular($conn);?>
            <br>
               
        </section>
        <br>
        <footer>
            <p>(c) copyright -Año 2021-Contactos:_--andcgonzalez111@misena.edu.co--diacburgos@misena.edu.co--ykpaez6@misena.edu.co--_</p>
        </footer>
        

    </div>
    
</body>
<script>
    const btn = document.querySelector('#menu-btn');
    const menu = document.querySelector('#sidemenu');
    btn.addEventListener('click', e =>{
        menu.classList.toggle("menu-expanded");
        menu.classList.toggle("menu-collapsed");
      
        document.querySelector('body').classList.toggle('body-expanded');
    });
</script>
</html>