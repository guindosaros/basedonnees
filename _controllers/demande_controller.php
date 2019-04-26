<?php
 $nom =  $_SESSION['username'];
 $image = $_SESSION['photo'];
 $id = $_SESSION['id'];
 $liste = User::userdemande($id);

?>