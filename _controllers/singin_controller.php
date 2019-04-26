<?php

    if(isset($_POST) && !empty($_POST))
    {
        $nomcli = checkInput($_POST['nom']);
        $datecli = checkInput($_POST['naissance']);
        $mailcli = checkInput($_POST['mail']);
        $conctcli = checkInput($_POST['contact']);
        $habcli = checkInput($_POST['habi']);
        $passcli = checkInput($_POST['mdp']);
        $verifImg= $_FILES['imgph']['name'];
        $imgcli= $_FILES['imgph'];

        // var_dump($nomcli);
        // var_dump( $datecli);
        // var_dump($mailcli);
        // var_dump($habcli);
        // var_dump($imgcli);
        // var_dump( $passcli);
        // var_dump( $habcli);
        // var_dump( $verifImg);
        // var_dump( $stat);
         
        $stat = validFrom([$nomcli,$datecli,$mailcli,$conctcli,$habcli,$passcli,$imgcli]);
        
        if($stat)
        {
            $image = importImg($imgcli,$nomcli);
            User::insertUser($nomcli,$datecli,$mailcli,$conctcli,$habcli,sha1($passcli),$image);
            header('location:home');
            
        }else{
            $error = " les champs n'on par été correctement remplie";
        }
    }

    ?> 