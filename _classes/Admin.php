<?php 

class Admin
{
  
  //Connexion en tand qu'administracteur 
  static function adminlogin($email, $password){
    global $db;
    $stat = $db->prepare('SELECT * FROM admins where mail = ? AND passwords = ?');
    $stat->execute(array($email,$password));
    return $stat->fetch();
}

// recuperer tous les utulisateur
static function Alluser(){
    global $db;
    $stat = $db->prepare('SELECT * FROM utilisateur ');
    $stat->execute([]);
    return $stat->fetchAll();
  }
  // 
  // nom de demande en cours 
static function Alldemande(){
  global $db;
  $stat = $db->prepare('SELECT * FROM demande WHERE statut = 0');
  $stat->execute([]);
  return $stat->fetchAll();
}
  
//Afficher tous les Rendez vous 
static function Allrdv(){
    global $db;
    $stat = $db->prepare('SELECT * FROM rendez ');
    $stat->execute([]);
    return $stat->fetchAll();
  }

//suprimer un utilisateur
static function deleteusers($id)
{
  global $db;
  $stat = $db->prepare('DELETE FROM utilisateur WHERE id=?');
  $stat->execute([$id]);
}

// tous rendez et client 
static function Allclientrdv(){
  global $db;
  $stat = $db->prepare('SELECT utilisateur.nomcli , rendez.daterdv ,rendez.heure FROM utilisateur , rendez WHERE rendez.iduser = utilisateur.id');
  $stat->execute([]);
  return $stat->fetchAll();
}

// Toutes les demande 
static function Alldmd(){
  global $db;
  $stat = $db->prepare("SELECT demande.id,quartier.libellequa,modele.libelle,demande.numterain,demande.ilot,demande.lot,demande.detail,demande.superficie,demande.idadd,demande.datedemande,demande.statut,
  demande.cni,demande.cession,utilisateur.nomcli
  FROM demande,quartier,modele,utilisateur 
  WHERE demande.id = utilisateur.id AND demande.idqua = quartier.idqua AND demande.idtype = modele.idtype
  ORDER by demande.idadd DESC ");
  $stat->execute([]);
  return $stat -> fetchAll();
}
//demande Non traité
static function dmdencours(){
  global $db;
  $stat = $db->prepare("SELECT demande.id,quartier.libellequa,modele.libelle,demande.numterain,demande.ilot,demande.lot,demande.detail,demande.superficie,demande.idadd,demande.datedemande,demande.statut,
  demande.cni,demande.cession,utilisateur.nomcli
  FROM demande,quartier,modele,utilisateur 
  WHERE demande.id = utilisateur.id AND demande.idqua = quartier.idqua AND demande.idtype = modele.idtype AND demande.statut = 0
  ORDER by demande.idadd DESC ");
  $stat->execute([]);
  return $stat -> fetchAll();
}

//confirmer demande permis
static function confirm($statut,$detail,$idadd){
  global $db;
  $stat = $db->prepare("UPDATE demande SET statut=?, detail= ? WHERE idadd =?");
  $stat->execute([$statut,$detail,$idadd]);
}
//refuser Une demande 
static function refuser($statut,$detail,$idadd){
  global $db;
  $stat = $db->prepare("UPDATE demande SET statut=?, detail= ? WHERE idadd =?");
  $stat->execute([$statut,$detail,$idadd]);
}
// Rendez today
static function todayrdv($day){
  global $db;
  $stat = $db->prepare('SELECT * FROM rendez WHERE daterdv=? ');
  $stat->execute([$day]);
  return $stat->fetchAll();
}
//nombre de demande traité
static function dmdtraite(){
  global $db;
  $stat = $db->prepare('SELECT * FROM `demande` WHERE statut = 1 OR statut = 2');
  $stat->execute([]);
  return $stat->fetchAll();
}

//nombre Non traité
static function dmdNontraite(){
  global $db;
  $stat = $db->prepare('SELECT * FROM `demande` WHERE statut = 0 OR statut = 3');
  $stat->execute([]);
  return $stat->fetchAll();
}

}