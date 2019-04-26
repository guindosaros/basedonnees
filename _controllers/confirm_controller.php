<?php
if(isset($_GET['id']) && !empty($_GET['id']));
   $idmo = checkInput($_GET['id']);
   $stat = validFrom([$idmo]);

   $statut = 1 ;
   $detail = " 
    Votre
    Demande d'attibution de permis de Contruire 
    a été accepté avec veillez prend 
    rendez-vous sur notre plateforme pour le passage de retrait de votre Permis de Construction
    NB: prevoit la somme de 25600 pour frais annexe de dossier.";
   if($stat)
  {
       Admin::confirm($statut,$detail,$idmo);
      header('Location:traitement');
  }else{
    header('Location:dash');
  }

?>