<?php
 $nom =  $_SESSION['name'];
 $image = $_SESSION['photos'];
 $id = $_SESSION['id'];
 $nbreUser = count(Admin::Alluser());
 $nbreDemande = count(Admin::Alldemande());
 $nbrerdv = count(Admin::Allrdv());
 $totaldemande = count(Admin::Alldmd());
 
 $liste = Admin::Alldmd();

 
?>