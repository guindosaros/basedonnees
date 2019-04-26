<?php
if(isset($_POST) && !empty($_POST));
   $idmo = checkInput($_POST['iddmd']);
   $detail = checkInput($_POST['motif']);
   $stat = validFrom([$idmo,$detail]);
    
     $statut = 2 ;

   if($stat)
  {
       Admin::refuser($statut,$detail,$idmo);
      header('Location:traitement');
  }else{
    header('Location:dash');
  }

?>