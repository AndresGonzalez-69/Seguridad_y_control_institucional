<?php
include ('conexion.php');
/*------------------------Tabla Docentes---------------------------------------------------*/
function CarDatosDeDocentes($conn){
    $consulta="SELECT * FROM usuario where idRol='Docente'";
    $resultado= mysqli_query($conn,$consulta);
    while($fila= mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['documento_id']. "</td>";
        echo "<td>".$fila['t_d_documento']."</td>";
        echo "<td>".$fila['nombre'] ."</td>";
        echo "<td>".$fila['apellido'] ."</td>";
        echo "<td>".$fila['direccion']."</td>";
        echo "<td>".$fila['idSede']."</td>";
        echo "<td>".$fila['idJornada']."</td>";
        echo "<td>".$fila['correo']."</td>";
        echo "<td>".$fila['idRol']."</td>";
        if($fila['Estado']=='Activo'){
            echo "<td style='background: rgba(59, 252, 0, 0.445); '>".$fila['Estado']."</td>";
        }else{
            echo "<td style='background: rgba(240, 13, 13, 0.582); color:white'>".$fila['Estado']."</td>";
        };
        echo "</tr>";
    }
    
}
/*--------------------Tabla de Estudiantes -------------------------------------------*/
function DatosDeEstudiantes($conn){
    $Reciduo= mysqli_query($conn,"SELECT * FROM usuario where idRol='Estudiante'");
    while($fila= mysqli_fetch_array($Reciduo)){
        echo "<tr>";
        echo "<td>".$fila['documento_id']. "</td>";
        echo "<td>".$fila['t_d_documento']."</td>";
        echo "<td>".$fila['nombre'] ."</td>";
        echo "<td>".$fila['apellido'] ."</td>";
        echo "<td>".$fila['direccion']."</td>";
        echo "<td>".$fila['idSede']."</td>";
        echo "<td>".$fila['idJornada']."</td>";
        echo "<td>".$fila['correo']."</td>";
        echo "<td>".$fila['idRol']."</td>";
        if($fila['Estado']=='Activo'){
            echo "<td style='background: rgba(59, 252, 0, 0.445);'>".$fila['Estado']."</td>";
        }else{
            echo "<td style='background: rgba(240, 13, 13, 0.582); color:white'>".$fila['Estado']."</td>";
        };
        echo "</tr>";
    }
}

/*--------------------Tabla de Administrativos -------------------------------------------*/
function DatosDeAdministrativos($conn){
    $Reciduo= mysqli_query($conn,"SELECT * FROM usuario where idRol='Administrativo'");
    while($fila= mysqli_fetch_array($Reciduo)){
        echo "<tr>";
        echo "<td>".$fila['documento_id']. "</td>";
        echo "<td>".$fila['t_d_documento']."</td>";
        echo "<td>".$fila['nombre'] ."</td>";
        echo "<td>".$fila['apellido'] ."</td>";
        echo "<td>".$fila['direccion']."</td>";
        echo "<td>".$fila['idSede']."</td>";
        echo "<td>".$fila['idJornada']."</td>";
        echo "<td>".$fila['correo']."</td>";
        echo "<td>".$fila['idRol']."</td>";
        if($fila['Estado']=='Activo'){
            echo "<td style='background: rgba(59, 252, 0, 0.445);'>".$fila['Estado']."</td>";
        }else{
            echo "<td style='background: rgba(240, 13, 13, 0.582); color:white'>".$fila['Estado']."</td>";
        };
        echo "</tr>";
    }
}

/*------------------------------Tabla <Visitante-------------------------*/


function CarTabVisitantes($conn){
    $consulta="SELECT * FROM visitante";
    $resultado= mysqli_query($conn,$consulta);
    while($fila= mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['documento_id']. "</td>";
        echo "<td>".$fila['descripcion']."</td>";
       
        echo "</tr>";
    }
    mysqli_close($conn);
}

/*-------Cambiar stado -----------------------*/
if(isset($_POST["btnCamEstado"])){
    CambiarEstado($conn);   
}
   
    function CambiarEstado ($conn){
        
        $documento_id=$_POST['documento_id'];
        $Estado=$_POST['estado'];

        $consulta="UPDATE usuario set Estado='$Estado' where documento_id='$documento_id'";
        if(mysqli_query($conn, $consulta)){
            echo "<script> alert ('La base de datos se actualizo');window.location='UsuarioPlataforma.php'</script>";
        }else{
            echo "<script> alert ('No asido posible actualizar la base de datos');window.location='UsuarioPlataforma.php'</script>";
        }
    }
?>