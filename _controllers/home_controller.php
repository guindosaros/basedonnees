<?php

 if (isset($_POST)  && !empty($_POST) ) {
     
     $email=$_POST['mail'];
     $password=$_POST['pwd'];

     $state=validFrom([$email,$password]);
     if($state){
         $user=User::login($email,sha1($password));
         if($user){
            $_SESSION['username']=$user['nomcli'];
            $_SESSION['photo']=$user['imagecli'];
            $_SESSION['id']=$user['id'];

             header("location:principal");
         }else{
            $error = "Email et/ou mot de passe incorrect";
         }

     }
     
 }