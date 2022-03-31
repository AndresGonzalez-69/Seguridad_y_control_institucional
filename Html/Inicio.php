<?php
error_reporting(0);
session_start();
$_SESSION['doc'];
$varsesion = $_SESSION['doc'];
 if($varsesion == null || $varsesion = ''){
     
     echo 'usted no tiene autorizacion';
     die();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/St_Inicioo.css">
    <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../IMG/PosibleLogo.png" type="image/x-icon">
    <title>C&S Juana Escobar</title>
</head>
<body>
   
    <div id="cuerpo">
        <header> <a name="may"></a>
            <h1>CYSI</h1>
        </header>
        <div id="cajaheader"></div>
        <div id="tras"></div>
            <nav>
                <ul >
                    <li style='font-size: 18px;'><a href="perfil/Perfil.php"><span class="primero" style='font-size: 21px;'><i class="fas fa-male"></i></span>Mi perfil </a> </li>
                    <li style='font-size: 18px;'><a href=""><span class="segundo"><i class="fas fa-bell"></i></span>Notificaciones</a></li>
                    <li style='font-size: 18px;'><a href="./camRF/camRF.html"><span class="tercero"><i class="fas fa-camera"></i></span> Cara T/Real</a></li>
                    <li style='font-size: 18px;'><a href=""><span class="cuarto"><i class="far fa-calendar-alt"></i></span>Horarios del sistema</a>
                        <ul>
                            <li id="JMA"><a href="1hor_mana.html">J.M</a></li>
                            <li><a href="1hor_tarde.html">J.T</a></li>
                        </ul>
                    </li>
                </ul>
                <hr>
            </nav>
        <div id="logo1">
                <img src="../IMG/Logo1_0.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 30px;">
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
                    <div id="photo"><img src="../IMG/Opciones.png" alt="" ></div>
                    <div id="name"><span>Opciones</span></div>
                </div>
                <!--Items-->
                <div id="menu-items">
                    <div class="item">
                        <a href="profiles.html">
                            <div class="icon"><img src="../IMG/PerAcademico.png" alt="" style="border-radius:50%; width:30px; height: 30px;"></div>
                            <div class="title"><span>Perfiles</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                    <div class="item">
                        <a href="Herramientas/herramientas.html">
                            <div class="icon"><img src="../IMG/Configuracion.png" alt="" ></div>
                            <div class="title"><span>Herramientas</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                    <div class="item">
                        <a href="./cartelera/cartelera.php">
                            <div class="icon"><img src="../IMG/cartelera1.png" alt=""  width="30px" height="30px"></div>
                            <div class="title"><span>Cartelera</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                    <div class="item">
                        <a href="./login/cerra_session.php">
                            <div class="icon"><img src="../IMG/cerrarsesion.png" alt=""  width="30px" height="30px"></div>
                            <div class="title"><span>Cerrar sesion</span></div>
                        </a>
                    </div>
    
                    <div class="item-separador"></div>
    
                </div>
            </div>
    
        </aside>
        <section>
        <article id="article1">
                <h2>Control y Seguridad Institucional</h2><br><br><br>
            </article>
            <article id="article2">
                    <ul>
                        <li>
                     <h4> C&SI</h4>
                     <br>
                     <p>Esta plataforma ha sido diseñada en base a los requerimientos funcionales establecidos con el grupo de trabajo y los directivos de la institución para cubrir las expectativas necesarias, en pro del desarrollo del sistema de información ejerciendo control y seguridad para el momento de ingreso y salida del plantel educativo. De esa manera siendo eficientes en los procesos que se han venido realizando de forma repetitiva  hace bastante tiempo, Es hora que la tecnología nos lleve a otro nivel  
                     </p>
                     <br>
                     <h4>¡¡RECUERDE!!</h4>
                     <p> 
                        Es sierto que todas las notificaciones que el sistema le enviara serán importantes, más sin embargó recuerde prestar mas  atencion e atender principalmente las que el  sistema se las demarque en rojo 
                     </p>
                     <br>
                    </li>
                    <br>
                    <hr>
                    <br>
                     <li>
                        <h4> Sistema de informaciòn</h4>
                        <br>
                        <p>Este sistema de información a sido desarrollado en base a los estándares exigidos actualmente por el mercado, de tal manera que el equipo de trabajo con formado por aprendices SENA, los cuales desarrollaron este sistema, se han instruido como se requiere en lo que los estándares que se exigen en la actualidad. Plasmando lo mejor de si mismos, conjunto a los conocimientos adquiridos mediante el programa de formación Tecnólogo en análisis y desarrollo de sistemas de información (ADSI) comprometidos en la gestión y desarrollo del país.
                        </p>
                        <br>
                        <h4>"En caso de inconsistencias con la plataforma seguir indicaciones dadas con anterioridad, si al cabo de 5 minutos no ha podido resolverlo comuníquese de forma inmediata con los programadores"</h4>
                        <br>
                     </li>
                    </ul>
            </article>
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