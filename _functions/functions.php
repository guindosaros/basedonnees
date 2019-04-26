<?php

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function importImg($img,$nom){
    $image = checkInput($img['name']);
    $imageExtensions = strrchr($image, '.');
    $arrayExtensions = array('.PNG', '.png', '.JPEG', '.jpeg', '.jpg', '.JPG', '.gif', '.GIF');
    if (in_array($imageExtensions,$arrayExtensions)) {
        $address = 'assets/upload/' .$nom. time() . $imageExtensions;
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $address);
        return $address;
    }
}
 
function day(){
    $info = getdate();
        $date1 = $info['mday'];
        $month = $info['mon'];
        $year = $info['year'];
        $datedemande = "$year-$month-$date1";
       return $datedemande ;
}


function nowdate(){
    $info = getdate();
        $date1 = $info['mday'];
        $month = $info['mon'];
        $year = $info['year'];
        $datedemande = "$date1/$month/$year";
       return $datedemande ;
}



function dossier($img,$nom){
    $image = checkInput($img['name']);
    $imageExtensions = strrchr($image, '.');
    $arrayExtensions = array('.PNG', '.png', '.JPEG', '.jpeg', '.jpg', '.JPG', '.gif', '.GIF','.pdf');
    if (in_array($imageExtensions,$arrayExtensions)) {
        $address = 'assets/document/' .$nom. time() . $imageExtensions;
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $address);
        return $address;
    }
}
function importVid($path, $img){
    $image = checkInput($img['name']);
    $imageExtension = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "mp4" || $imageExtension == "mkv" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image) ;
    }
}
function checkForm($tab)
{
    $array = [];
    for($i=0; $i<count($tab); $i++)
    {
       $array[$i] = checkInput($tab[$i]);
    }
    return $array; 
}
function validFrom($tab){

    $var = 0;
    $var1 = 0;
    foreach ($tab as $i){
        $var1 ++;
        if(!empty($i)){
            $var ++;
        }else{
            $var --;
        }
    }
    if($var == $var1){
        return true;
    }else{
        return false;
    }
}

function isLogged()
{
    if (!isset($_SESSION['user'])) {
        header('location:home');
        exit();
    }
    
}

function isAdmin()
{
    if ($_SESSION['user']['typeUser'] != 1) {
        header('location:home');
        exit();
    }

}
