<?php
 $nom =  $_SESSION['username'];
 $image = $_SESSION['photo'];
 $id = $_SESSION['id'];
 $rdv = User::allrdv($id);

if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::deleterdv($_GET['id']);
    header('Location: rendez');
    exit();
}

 if(isset($_POST) && !empty($_POST))
    {
        $jours = checkInput($_POST['jours']);
        $heure = checkInput($_POST['heure']);
        $stat = validFrom([$jours,$heure]);

        if($stat)
        {
            User::rendez($jours,$heure,$id);
            header('location: rendez');
            
        }else{
            $error = "Veillez Remplie Tous Les Champs Svp ";
         }
    }








?>