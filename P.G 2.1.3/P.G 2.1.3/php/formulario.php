<?php 

include ("conexion.php");
 $rol = $_POST['Rol'];
 

/*---------------------------------------------------------------------------------------------------*/
 if( isset($_POST['generarindi'])){

    $documento = $_POST['documento'];
    $fechaIni = $_POST['fechaIni'];
    $fechaFin = $_POST['fechaFin'];
    switch ($rol){
        case 'Estudiante':
           $query = mysqli_query ($conn,"SELECT nombre FROM usuario WHERE  documento_id = $documento AND idRol= 'Estudiante' ");
           $nr = mysqli_num_rows($query);

           if($nr==1){ 
           function cargarTabluuu($conn){
            $documento = $_POST['documento'];
            $fechaIni = $_POST['fechaIni'];
            $fechaFin = $_POST['fechaFin'];
            $queryFun = mysqli_query ($conn,"SELECT idRol,nombre, apellido,telefono,h_Ingreso,h_salida,fecha,curso FROM acceso INNER JOIN usuario ON acceso.documento_id=usuario.documento_id INNER JOIN estudiante ON estudiante.documento_id= usuario.documento_id WHERE acceso.documento_id=$documento AND fecha BETWEEN '$fechaIni' AND '$fechaFin'");
            while($fila = mysqli_fetch_array($queryFun)){
        
            
                echo "<tr>";
                echo "<td>".$fila['idRol']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['apellido']."</td>";
                echo "<td>".$fila['telefono']."</td>";
                echo "<td>".$fila['h_Ingreso']."</td>";
                echo "<td>".$fila['h_salida']."</td>";
                echo "<td>".$fila['fecha']."</td>";
                echo "<td>".$fila['curso']."</td>";
                echo "</tr>";
                
           }
           mysqli_close($conn);
           }
          }else{
              echo" <script> alert('Usuario no existe en la base de datos de estudiantes'); window.location ='../Html/consultas.html' </script>";
          }
         break;
        case 'docentes':
            $query = mysqli_query ($conn,"SELECT nombre FROM usuario WHERE  documento_id = $documento AND idRol= 'Docente' ");
           $nr = mysqli_num_rows($query);

           if($nr==1){ 
           function cargarTabluuu($conn){
            $documento = $_POST['documento'];
            $fechaIni = $_POST['fechaIni'];
            $fechaFin = $_POST['fechaFin'];
            $queryFun = mysqli_query ($conn,"SELECT idRol,nombre, apellido, telefono,h_Ingreso,h_salida,fecha FROM acceso INNER JOIN usuario ON acceso.documento_id=usuario.documento_id  WHERE acceso.documento_id= $documento AND fecha BETWEEN '$fechaIni' AND '$fechaFin'");
            while($fila = mysqli_fetch_array($queryFun)){
        
            
                echo "<tr>";
                echo "<td>".$fila['idRol']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['apellido']."</td>";
                echo "<td>".$fila['telefono']."</td>";
                echo "<td>".$fila['h_Ingreso']."</td>";
                echo "<td>".$fila['h_salida']."</td>";
                echo "<td>".$fila['fecha']."</td>";
                echo "</tr>";
                
           }
           mysqli_close($conn);
           }
          }else{
              echo" <script> alert('Usuario no existe en la base de datos de docentes'); window.location ='../Html/consultas.html' </script>";
          }
            break;
        case 'Administrativo':
                $query = mysqli_query ($conn,"SELECT nombre FROM usuario WHERE  documento_id = $documento AND idRol= 'Administrativo' ");
               $nr = mysqli_num_rows($query);
    
               if($nr==1){ 
               function cargarTabluuu($conn){
                $documento = $_POST['documento'];
                $fechaIni = $_POST['fechaIni'];
                $fechaFin = $_POST['fechaFin'];
                $queryFun = mysqli_query ($conn,"SELECT idRol,nombre, apellido, telefono,h_Ingreso,h_salida,fecha FROM acceso INNER JOIN usuario ON acceso.documento_id=usuario.documento_id  WHERE acceso.documento_id= $documento AND fecha BETWEEN '$fechaIni' AND '$fechaFin'");
                while($fila = mysqli_fetch_array($queryFun)){
            
                
                    echo "<tr>";
                    echo "<td>".$fila['idRol']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['apellido']."</td>";
                    echo "<td>".$fila['telefono']."</td>";
                    echo "<td>".$fila['h_Ingreso']."</td>";
                    echo "<td>".$fila['h_salida']."</td>";
                    echo "<td>".$fila['fecha']."</td>";
                    echo "</tr>";
                    
               }
               mysqli_close($conn);
               }
              }else{
                  echo" <script> alert('Usuario no existe en la base de datos de Administrativo'); window.location ='../Html/consultas.html' </script>";
              }
                break;
        default:
            break;
       }
        
    }
 
    
 
//-----------------------------------Formulario grupal-------------------------------------------------------------------------


 if( isset($_POST['btnGenerarGrupo'])){
    
    switch ($rol){
        case 'Estudiante':
     
         $query = mysqli_query ($conn,"SELECT * FROM rol WHERE idRol='Estudiante' ");
         $nr = mysqli_num_rows($query);
   
         if($nr==1){ 
            function cargarTabla($conn){
                $jornada = $_POST['jornada'];
                $fechaIni = $_POST['fecha-ini'];
                $fechaFin = $_POST['fecha-fin'];
                $query = mysqli_query ($conn,"SELECT idRol,nombre, apellido, telefono,h_Ingreso,h_salida,fecha,curso FROM acceso INNER JOIN usuario ON acceso.documento_id=usuario.documento_id INNER JOIN estudiante ON estudiante.documento_id= usuario.documento_id WHERE usuario.idRol='Estudiante' And idJornada=$jornada AND fecha BETWEEN '$fechaIni' AND '$fechaFin'");
                while($fila = mysqli_fetch_array($query)){
    
            
                    echo "<tr>";
                    echo "<td>".$fila['idRol']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['apellido']."</td>";
                    echo "<td>".$fila['telefono']."</td>";
                    echo "<td>".$fila['h_Ingreso']."</td>";
                    echo "<td>".$fila['h_salida']."</td>";
                    echo "<td>".$fila['fecha']."</td>";
                    echo "<td>".$fila['curso']."</td>";
                    echo "</tr>";
                
                }
                 mysqli_close($conn);
           }
         }else{
            echo" <script> alert('Usuario no existe en la base de estudiantes '); window.location ='../Html/consultas.html' </script>";
        }
         break;
        case 'docentes':
            $query = mysqli_query ($conn,"SELECT * FROM rol WHERE idRol='Docente' ");
            $nr = mysqli_num_rows($query);
      
            if($nr==1){ 
               function cargarTabla($conn){
                   $jornada = $_POST['jornada'];
                   $fechaIni = $_POST['fecha-ini'];
                   $fechaFin = $_POST['fecha-fin'];
                   $query = mysqli_query ($conn,"SELECT idRol,nombre, apellido, telefono,h_Ingreso,h_salida,fecha FROM acceso INNER JOIN usuario ON acceso.documento_id=usuario.documento_id  WHERE usuario.idRol='Docente' AND idJornada= $jornada AND fecha BETWEEN '$fechaIni' AND '$fechaFin' ");
                   while($fila = mysqli_fetch_array($query)){
       
               
                       echo "<tr>";
                       echo "<td>".$fila['idRol']."</td>";
                       echo "<td>".$fila['nombre']."</td>";
                       echo "<td>".$fila['apellido']."</td>";
                       echo "<td>".$fila['telefono']."</td>";
                       echo "<td>".$fila['h_Ingreso']."</td>";
                       echo "<td>".$fila['h_salida']."</td>";
                       echo "<td>".$fila['fecha']."</td>";
                       echo "</tr>";
                   
                   }
                    mysqli_close($conn);
              }
            }else{
               echo" <script> alert('Usuario no existe en l base de Docentes'); window.location ='../Html/consultas.html' </script>";
           }
         break;
        case 'Administrativo';
              $query = mysqli_query ($conn,"SELECT * FROM rol WHERE idRol='Administrativo' ");
              $nr = mysqli_num_rows($query);
  
             if($nr==1){ 
               function cargarTabla($conn){
                 $jornada = $_POST['jornada'];
                 $fechaIni = $_POST['fecha-ini'];
                 $fechaFin = $_POST['fecha-fin'];
                 $query = mysqli_query ($conn,"SELECT idRol,nombre, apellido, telefono,h_Ingreso,h_salida,fecha FROM acceso INNER JOIN usuario ON acceso.documento_id=usuario.documento_id  WHERE usuario.idRol='Administrativo'AND idJornada= $jornada AND fecha BETWEEN '$fechaIni' AND '$fechaFin'");
                 while($fila = mysqli_fetch_array($query)){
   
           
                   echo "<tr>";
                   echo "<td>".$fila['idRol']."</td>";
                   echo "<td>".$fila['nombre']."</td>";
                   echo "<td>".$fila['apellido']."</td>";
                   echo "<td>".$fila['telefono']."</td>";
                   echo "<td>".$fila['h_Ingreso']."</td>";
                   echo "<td>".$fila['h_salida']."</td>";
                   echo "<td>".$fila['fecha']."</td>";
                   echo "</tr>";
               
                 }
                  mysqli_close($conn);
                }
            }else{
                  echo" <script> alert('Usuario no existe en la base de Administrativo'); window.location ='../Html/consultas.html' </script>";
                 }
         break;
        default;
        break;


 }
}

/*-------------------------------------------Funcion que carga la tabla grupal-----------------------------------------------------*/
function llamarResul1($conn){
    $rol = $_POST['Rol'];
    switch ($rol){

        case 'Estudiante':
            echo "<h2>Estudiantes</h2>";
            echo "<table>";
            echo "<thead>";
            echo "<th>idRol</th>";
            echo "<th>nombre</th>";
            echo "<th>apellido</th>";
            echo "<th>telefono</th>";
            echo "<th>h_Ingreso</th>";
            echo "<th>h_salida</th>";
            echo "<th>fecha</th>";
            echo "<th>curso</th>";
            echo "</thead>";
            echo "<tbody>";
            echo cargarTabla($conn);
            echo "</tbody>";
            echo "</table>";
            echo "<br>";
            break;
        case 'docentes';
            echo "<h2>Docentes</h2>";
            echo "<table>";
            echo "<thead>";
            echo "<th>idRol</th>";
            echo "<th>nombre</th>";
            echo "<th>apellido</th>";
            echo "<th>telefono</th>";
            echo "<th>h_Ingreso</th>";
            echo "<th>h_salida</th>";
            echo "<th>fecha</th>";
            echo "</thead>";
            echo "<tbody>";
            echo cargarTabla($conn);
            echo "</tbody>";
            echo "</table>";
            echo "<br>";
            break;
        case 'Administrativo';
            echo "<h2>Administrativos</h2>";
            echo "<table>";
            echo "<thead>";
            echo "<th>idRol</th>";
            echo "<th>nombre</th>";
            echo "<th>apellido</th>";
            echo "<th>telefono</th>";
            echo "<th>h_Ingreso</th>";
            echo "<th>h_salida</th>";
            echo "<th>fecha</th>";
            echo "</thead>";
            echo "<tbody>";
            echo cargarTabla($conn);
            echo "</tbody>";
            echo "</table>";
            echo "<br>";
            break;


     }
          echo "<a href='../Html/Consultas.html'><input type='submit' value='Volver'></a>";
}

/*-------------------------------------------Funcion que carga la tabla individual-----------------------------------------------------*/

function llamarResul2($conn){
    $rol = $_POST['Rol'];
    
    switch ($rol){
        case 'Estudiante':
            
            echo "<table>";
            echo "<thead>";
            echo "<th>idRol</th>";
            echo "<th>nombre</th>";
            echo "<th>apellido</th>";
            echo "<th>telefono</th>";
            echo "<th>h_Ingreso</th>";
            echo "<th>h_salida</th>";
            echo "<th>fecha</th>";
            echo "<th> curso</th>";
            echo "</thead>";
            echo "<tbody>";
            echo cargarTabluuu($conn);
            echo "</tbody>";
            echo "</table>";
            echo "<br>";
            break;
        case 'docentes':
            echo "<table>";
            echo "<thead>";
            echo "<th>idRol</th>";
            echo "<th>nombre</th>";
            echo "<th>apellido</th>";
            echo "<th>telefono</th>";
            echo "<th>h_Ingreso</th>";
            echo "<th>h_salida</th>";
            echo "<th>fecha</th>";
            echo "</thead>";
            echo "<tbody>";
            echo cargarTabluuu($conn);
            echo "</tbody>";
            echo "</table>";
            echo "<br>";
                break;
        case 'Administrativo';
            
            echo "<table>";
            echo "<thead>";
            echo "<th>idRol</th>";
            echo "<th>nombre</th>";
            echo "<th>apellido</th>";
            echo "<th>telefono</th>";
            echo "<th>h_Ingreso</th>";
            echo "<th>h_salida</th>";
            echo "<th>fecha</th>";
            echo "</thead>";
            echo "<tbody>";
            echo cargarTabluuu($conn);
            echo "</tbody>";
            echo "</table>";
            echo "<br>";

            break;
        default:
                break;
       }
       echo "<a href='../Html/Consultas.html'><input type='submit' value='Volver'></a>";
}
?>