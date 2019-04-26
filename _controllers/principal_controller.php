<?php
  $nom =  $_SESSION['username'];
  $image = $_SESSION['photo'];
  $id = $_SESSION['id'];
  $statut0 = 0;
  $statut1 = 1;

  $demande= count(User::demandeAttente($statut0,$id));

  $rdv=count(User::rdv($id));

  $permis=  count(User::permis($statut1,$id));
  
?>