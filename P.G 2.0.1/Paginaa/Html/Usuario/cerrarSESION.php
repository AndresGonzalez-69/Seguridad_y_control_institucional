<?php  
 session_start();


//  $varsesion = $_SESSION['doc'];
//  if($varsesion == null || $varsesion = ''){
//      echo 'usted no tiene autorizacion';
//      die();
//  }

 session_destroy();
 header("Location:../../index.html");
?>