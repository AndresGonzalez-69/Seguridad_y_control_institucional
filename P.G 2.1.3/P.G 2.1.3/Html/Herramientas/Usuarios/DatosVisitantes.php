<?php include('cargarTablas.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgMbWh4WYQH8RJ0nwKlQCL9Ob7Yb-0u9xa8Q&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" href="./stDatVisit.css">
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
    <br><br>
      <fieldset id="forEliData">
        <legend>Eliminar Registro</legend>
            <form action="eliminar.php" method="POST">
                <label for=""> Documento:</label>
                <input type="text" name="documento"><br>
                <input type="submit" value="Eliminar Registro" name="btnEliminar">
            </form>
      </fieldset>
      <br>
      <fieldset id="IngreDataVisi">
        <legend>Ingresar Datos</legend>
            <form action="eliminar.php" method="POST">
                <br>
                <input type="text" placeholder="Documento" name="documento" required>
                <br><br>
                <select name="t_d_documento" id="">
                    <option value="">Tipo de Documento</option>
                    <option value="TI">T.I</option>
                    <option value="cc">C.C</option>
                    
                </select>
                <br><br>
                <input type="text" placeholder="Nombre" name="nombre" required>
                <br><br>
                <input type="text" placeholder="Apellido" name="apellido" required>
                <br><br>
                <input type="text" placeholder="Telefono" name="telefono" required>
                <br><br>
                <input type="text" placeholder="Direccion" name="direccion">
                <br><br>
                <select name="idSede" id="" required>
    
                    <option value="">Id Sede</option>
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
                
                <input type="submit" value="Registrar Visitante" name="btnIgres">
            </form>
      </fieldset>
    
</aside>
     <div id="cuerpo">
        <br><br><br><br>
        <a href="../herramientas.html" id="btnAtras"><input type="submit" value="Atras" ></a> <hr><br>
        
        <br><br>
       <article>
            <h2>Datos De Visitantes</h2>
              <table id="tbVisitante"> 
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