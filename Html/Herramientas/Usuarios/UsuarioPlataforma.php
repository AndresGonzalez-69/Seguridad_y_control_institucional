<?php include('cargarTablas.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/ed644a14ad.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgMbWh4WYQH8RJ0nwKlQCL9Ob7Yb-0u9xa8Q&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" href="./stDatUsuario.css" type="text/css"/>
    <title>DATOS GUARDADOS</title>
</head>
<body>
<div id="cajaheader"></div>
<div id="tras"></div>
    <div id="logo1">
        <img src="../../IMG/Logo1_0.png" alt="" width="100" style="position: absolute; margin-top: 50px; margin-left: 30px;">
</div>
<section>
     <aside id="ForCamEst" >
     <fieldset>
            <legend>Cambiar Estado</legend>
            <form action="cargarTablas.php" method="POST">

               <label id="Documento" > Documento </label>
               <input type="text"  name="documento_id" required><br>
                <select name="estado"  required > 
                        <option value="">Estado</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                </select>
                <input type="submit" value="Generar Cambio" name="btnCamEstado" >
            </form>
            
        </fieldset>
     </aside>

     <div id="cuerpo">

        <br><br><br><br>
        <a href="../herramientas.html" id="btnAtras"><input type="submit" value="Atras" ></a> <hr><br>
        <br><br>

     <article>  <br>
       <h2>Datos Docentes</h2>
         <table > 
             <thead>
                 <th>Doumento </th>
                 <th>Tipo de documento</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Dirección</th>
                 <th>IdSede</th>
                 <th>IdJornada</th>
                 <th>Correo</th>
                 <th>Rol</th>
                 <th>Estado</th>
                 </thead>
           <tbody>
             <?=CarDatosDeDocentes($conn);?>
           </tbody>
         </table>
     </article>

     <br>

     <article>  <br>
       <h2>Datos Estudiantes</h2>
         <table > 
             <thead>
                 <th>Doumento</th>
                 <th>Tipo de documento</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Dirección</th>
                 <th>IdSede</th>
                 <th>IdJornada</th>
                 <th>Correo</th>
                 <th>Rol</th>
                 <th>Estado</th>

             </thead>
           <tbody>
             <?=DatosDeEstudiantes($conn);?>
           </tbody>
         </table>
     </article>
     <br>
     <article>  <br>
       <h2>Datos Administrativos</h2>
         <table > 
             <thead>
                 <th>Doumento</th>
                 <th>Tipo de documento</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Dirección</th>
                 <th>IdSede</th>
                 <th>IdJornada</th>
                 <th>Correo</th>
                 <th>Rol</th>
                 <th>Estado</th>

             </thead>
           <tbody>
             <?=DatosDeAdministrativos($conn);?>
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
