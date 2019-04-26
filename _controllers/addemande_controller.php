<?php
 $nom =  $_SESSION['username'];
 $image = $_SESSION['photo'];
 $id = $_SESSION['id'];
 $modele = Choix::alltype();
 $quartier = Choix::allquartier();

 if(isset($_POST) && !empty($_POST))
    {
        $terrain = checkInput($_POST['terrain']);
        $lot = checkInput($_POST['lot']);
        $ilot = checkInput($_POST['ilot']);
        $quartier = checkInput($_POST['quartier']);
        $type = checkInput($_POST['modele']);
        $superficie = checkInput($_POST['superficie']);
        $verifIcessaion= $_FILES['cession']['name'];
        $verifIcni= $_FILES['cni']['name'];
        $cession= $_FILES['cession'];
        $cni= $_FILES['cni'];    
        $stat = validFrom([$terrain,$superficie,$ilot,$lot,$type,$quartier,$cni,$cession]);
        if($stat)
        {
            $datedemande = nowdate();
            $statut = 0;
            $detail = " Votre demande d'attribution de permis de construction est en cours d'analyse merci pour Votre patience ";
            $imagecni = dossier($cni,$terrain);
            $imagecess = dossier($cession,$terrain);
            User::adddemande($terrain,$superficie,$ilot,$lot,$type,$quartier,$imagecni,$imagecess,$datedemande,$statut,$detail,$id);
            header('location: demande');
            
        }else{
            $error = "Veillez Remplie Tous Les Champs Svp ";
         }
    }



?>