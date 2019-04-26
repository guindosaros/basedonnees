<?php
  $nom =  $_SESSION['username'];
  $image = $_SESSION['photo'];
  $id = $_SESSION['id'];
  
  $profile = User::profil($id);
  // var_dump($profile);
  // var_dump();
  // exit();

?>