<?php
 $nom =  $_SESSION['username'];
 $image = $_SESSION['photo'];
 $id = $_SESSION['id'];

  if(isset($_GET['id']) && !empty($_GET['id']));
  $idmo = checkInput($_GET['id']);
   $stat = validFrom([$idmo]);
   $statut = 3 ;
   $detail = " Demande Annuler par l'utilisateur.";
   if($stat)
  {
       User::annuledemande($statut,$detail,$idmo);
      header('Location:demande');
  }else{
    header('Location:principal');
  }

?>