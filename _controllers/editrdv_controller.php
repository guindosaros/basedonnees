<?php
 $nom =  $_SESSION['username'];
 $image = $_SESSION['photo'];
 $id = $_SESSION['id'];
 
 if(isset($_POST) && !empty($_POST))
 {
    $modidate = checkInput($_POST['jours']);
    $modiheure= checkInput($_POST['heure']);
    $idd= checkInput($_POST['idrdv']);
    $stat = validFrom([$modiheure,$modidate,$idd]);
     
     if($stat)
     {
         User::modirdv($modidate,$modiheure,$idd);
         header('location: rendez');
         
     }else{
         header('location: principal');
      }
 }



 ?>

