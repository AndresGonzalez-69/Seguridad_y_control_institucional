<?php include('cargarTablas.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgMbWh4WYQH8RJ0nwKlQCL9Ob7Yb-0u9xa8Q&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" href="./stDatVisi.css">
    <title>DATOS DE VISITANTES</title>
</head>
<body>
<div id="cajaheader"></div>
<div id="tras"></div>
  
<div id="logo1">
        <img src="../../IMG/Logo1_0.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 30px;">
</div>

            
<section>
<aside >
    
      <fieldset id="forEliData">
        <legend>Eliminar registro</legend>
            <form action="eliminar.php" method="POST">
                <label for=""> Documento:</label>
                <input type="text" name="documento"><br>
                <input type="submit" value="Eliminar Registro" name="btnEliminar">
            </form>
      </fieldset>
      
      <fieldset id="IngreDataVisi">
        <legend>Igresar datos</legend>
            <form action="eliminar.php" method="POST">
                <br>
                <input type="text" placeholder="documento" name="documento" required>
                <br><br>
                <select name="t_d_documento" id="">
                    <option value="">Tipo de documento</option>
                    <option value="TI">ti</option>
                    <option value="cc">cc</option>
                    
                </select>
                <br><br>
                <input type="text" placeholder="nombre" name="nombre" required>
                <br><br>
                <input type="text" placeholder="apellido" name="apellido" required>
                <br><br>
                <input type="text" placeholder="telefono" name="telefono" required>
                <br><br>
                <input type="text" placeholder="direccion" name="direccion">
                <br><br>
                <select name="idSede" id="" required>
    
                    <option value="">id Sede</option>
                    <option value="32">32</option>
                    
                </select>
                <br><br>
                <select name="idJornada" id="" required>
    
                    <option value="">Jornada</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    
                </select>
                <br><br>
                <textarea name="descripcion" placeholder="Descripcion" id="" cols="20" rows="0" required></textarea>
                <br><br>
                <input type="submit" value="Registrar Visitante" name="btnIgres">
            </form>
      </fieldset>
    
</aside>
     <div id="cuerpo">
        <br><br><br><br>
          <img src="https://cdn-icons-png.flaticon.com/128/60/60577.png" width="35" height="35" style="position: absolute;margin-top: 10px; margin-left: 200px;" >     
          <a href="../herramientas.html" style="position: absolute; margin-top: 40px;margin-left: 200px;"> Volver</a></h2>
        <br><br>
       <article>
            <h3>Datos De Visitantes</h3>
              <table border='3'id="tbVisitante"> 
                  <thead>
                      <th>Doumento</th>
                      <th>Descripción</th>     
                  </thead>
              <tbody>
              <?=CarTabVisitantes($conn);?>
              </tbody>
              </table>
        </article>
     </div>
             <footer>
                <h6> (c) copyright -Año 2021-Contactos:_--andcgonzalez111@misena.edu.co--diacburgos@misena.edu.co--ykpaez6@misena.edu.co--_</h6> 
             </footer>
  </section>
</body>
</html>