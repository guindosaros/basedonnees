<?php

 if (isset($_POST)  && !empty($_POST) ) {
     $email=$_POST['email'];
     $password=$_POST['password'];
     $state=validFrom([$email,$password]);
     $error = "entrer vos paramétre de connexion svp";
     if($state){
         $admin=Admin::adminlogin($email,$password);
         if($admin){
            $_SESSION['name']=$admin['nom'];
            $_SESSION['photos']=$admin['photo'];
            $_SESSION['id']=$admin['id'];

             header("location:dash");
         }else{
            $error = "Email et/ou mot de passe incorrect";
         }

     }
     
 }