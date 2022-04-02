<?php


$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cysin";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion" .mysqli_connect_error());
}

// ---------------------------------------Docentes-------------------------------------------------------
function datosDocentes($conn){
  $consulta ="   SELECT documento_id,idRol,nombre,apellido FROM usuario  WHERE idRol='Docente'";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

  
   echo "<hr>";
   echo "<label for='nombre'> Nombre y Apellido: </label>";
   echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
   echo "<hr>";
   
   
  }
}
/*----------------------------------Tabla 601-------------------------------------------------------------------------*/
function tatle1($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=190774844  ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes1($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=601 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }
/*----------------------------Funcion de cargar los Estudiantes--602-------------------------------------------------------------*/
function tatle2($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=9145757 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
function DataEstudiantes2($conn){
     $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=602 ";
     $resultado =mysqli_query($conn, $consulta);
 
     while($fila = mysqli_fetch_array($resultado)){
  
      
      echo "<hr>";
      echo "<label for='nombre'> Nombre y Apellido: </label>";
      echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
      echo "<hr>";
      
      
     }
  }

  /*----------------------------------Tabla 605-------------------------------------------------------------------------*/
  function tatle3($conn){
    $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=132543674  ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
      echo "<h3>". $fila['curso']."</h3> ";
     
    }
  }
    function DataEstudiantes3($conn){
      $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=605 ";
      $resultado =mysqli_query($conn, $consulta);
      
      while($fila = mysqli_fetch_array($resultado)){
   
      
       echo "<hr>";
       echo "<label for='nombre'> Nombre y Apellido: </label>";
       echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
       echo "<hr>";
       
       
      }
   }


/*----------------------------------Tabla 701-------------------------------------------------------------------------*/
function tatle4($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=444444  ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes4($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=701 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }

 /*----------------------------------Tabla 702-------------------------------------------------------------------------*/
function tatle5($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=55555 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes5($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=702 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }

  /*----------------------------------Tabla 801-------------------------------------------------------------------------*/
function tatle6($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=3333333 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes6($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=801 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }

   /*----------------------------------Tabla 802-------------------------------------------------------------------------*/
function tatle7($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=6666666 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes7($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=802 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }

   /*----------------------------------Tabla 901-------------------------------------------------------------------------*/
  function tatle8($conn){
    $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=1234567  ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
      echo "<h3>". $fila['curso']."</h3> ";
     
    }
  }
    function DataEstudiantes8($conn){
      $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=901 ";
      $resultado =mysqli_query($conn, $consulta);
      
      while($fila = mysqli_fetch_array($resultado)){
   
      
       echo "<hr>";
       echo "<label for='nombre'> Nombre y Apellido: </label>";
       echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
       echo "<hr>";
       
       
      }
   }

 /*----------------------------------Tabla 902-------------------------------------------------------------------------*/
function tatle9($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=777777 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes9($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=902 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }
/*----------------------------Funcion de cargar los Estudiantes--903-------------------------------------------------------------*/
function tatle10($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=11111 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
function DataEstudiantes10($conn){
     $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=903 ";
     $resultado =mysqli_query($conn, $consulta);
 
     while($fila = mysqli_fetch_array($resultado)){
  
      
      echo "<hr>";
      echo "<label for='nombre'> Nombre y Apellido: </label>";
      echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
      echo "<hr>";
      
      
     }
  }


   /*----------------------------------Tabla 1001-------------------------------------------------------------------------*/
function tatle11($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=8888888 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes11($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=1001 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }

 /*----------------------------------Tabla 1002-------------------------------------------------------------------------*/
function tatle12($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=99999 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes12($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=1002 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }


 /*----------------------------------Tabla 1101-------------------------------------------------------------------------*/
function tatle13($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=212121 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes13($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=1101 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }


 /*----------------------------------Tabla 1102-------------------------------------------------------------------------*/
function tatle14($conn){
  $consulta ="   SELECT curso FROM usuario NATURAL JOIN estudiante WHERE documento_id=131313 ";
  $resultado =mysqli_query($conn, $consulta);
  
  while($fila = mysqli_fetch_array($resultado)){

    echo "<h3>". $fila['curso']."</h3> ";
   
  }
}
  function DataEstudiantes14($conn){
    $consulta ="   SELECT documento_id,idRol,nombre,apellido,curso FROM usuario NATURAL JOIN estudiante WHERE idRol='Estudiante'  AND curso=1102 ";
    $resultado =mysqli_query($conn, $consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
 
    
     echo "<hr>";
     echo "<label for='nombre'> Nombre y Apellido: </label>";
     echo "<button name='personal' value=". $fila['documento_id'].">". $fila['nombre']." ".$fila['apellido']."</button>";
     echo "<hr>";
     
     
    }
 }
     
?>