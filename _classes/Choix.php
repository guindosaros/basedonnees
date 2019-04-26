<?php 

class Choix
{
  
    static function alltype()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM modele');
        $stat->execute();
        return $stat->fetchAll();
    }

    static function allquartier()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM quartier');
        $stat->execute();
        return $stat->fetchAll();
    }

}