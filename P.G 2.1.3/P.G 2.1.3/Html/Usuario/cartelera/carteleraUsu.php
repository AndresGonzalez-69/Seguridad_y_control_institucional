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
    <link rel="stylesheet" href="st_carteleraUsu.css">
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
                <ul >
                    <li><a href=""><span class="primero"><i class="fas fa-male"></i></span> inicio</a> </li>
                    <li><a href=""><span class="segundo"><i class="fas fa-bell"></i></span></a></li>
                    <li><a href=""><span class="tercero"><i class="fas fa-camera"></i></span> </a></li>
                    <li><a href=""><span class="cuarto"><i class="far fa-calendar-alt"></i></span></a>
                        <!-- <ul>
                            <li id="JMA"><a href="1hor_mana.html">J.M</a></li>
                            <li><a href="1hor_tarde.html">J.T</a></li>
                        </ul> -->
                    </li>
                </ul>
                <hr>
            </nav>
        <div id="logo1">
                <img src="IMG/Logo1_0.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 30px;">
        </div>
        <section>
            <article id="article1">
                <h2>control y seguridad institucional</h2>
            </article>
            <article id="article2">
                    <ul>
                        <li>
                     <h4> C&SI</h4>
                     <p>Esta plataforma ha sido dise??ada en base a los requerimientos funcionales establecidos con el grupo de trabajo y los directivos de la instituci??n para cubrir las expectativas necesarias, en pro del desarrollo del sistema de informaci??n ejerciendo control y seguridad para el momento de ingreso y salida del plantel educativo. De esa manera siendo eficientes en los procesos que se han venido realizando de forma repetitiva  hace bastante tiempo, Es hora que la tecnolog??a nos lleve a otro nivel  
                     </p>
                     
                     <h4>????RECUERDE!!</h4>
                     <p> 
                        Es sierto que todas las notificaciones que el sistema le enviara ser??n importantes, m??s sin embarg?? recuerde prestar mas  atencion e atender principalmente las que el  sistema se las demarque en rojo 
                     </p>
                     <br>
                    </li>
                    <br>
                    <hr>
                    <br>
                     <li>
                        <h4> Sistema de informacion</h4>
                        <p>Este sistema de informaci??n a sido desarrollado en base a los est??ndares exigidos actualmente por el mercado, de tal manera que el equipo de trabajo con formado por aprendices SENA, los cuales desarrollaron este sistema, se han instruido como se requiere en lo que los est??ndares que se exigen en la actualidad. Plasmando lo mejor de si mismos, conjunto a los conocimientos adquiridos mediante el programa de formaci??n Tecn??logo en an??lisis y desarrollo de sistemas de informaci??n (ADSI) comprometidos en la gesti??n y desarrollo del pa??s.
                        </p>
                        <h4>"En caso de inconsistencias con la plataforma seguir indicaciones dadas con anterioridad, si al cabo de 5 minutos no ha podido resolverlo comun??quese de forma inmediata con los programadores"</h4>
                        <br>
                     </li>
                    </ul>
            </article>
        </section>
        <br>
        <footer>
            <p>(c) copyright -A??o 2021-Contactos:_--andcgonzalez111@misena.edu.co--diacburgos@misena.edu.co--ykpaez6@misena.edu.co--_</p>
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