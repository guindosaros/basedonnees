<?php 

class User
{
  // inscription d'un utilisateur 
    static function insertUser($nomcli,$datecli,$mailcli,$conctcli,$habcli,$passcli,$imgcli)
  {
    global $db;
    $stat = $db->prepare('INSERT INTO utilisateur (nomcli,datenaisscli,mailcli,contactcli,habitationcli,passwordcli,imagecli) VALUES(?,?,?,?,?,?,?)');
    $stat->execute([$nomcli,$datecli,$mailcli,$conctcli,$habcli,$passcli,$imgcli]);
  }

  //pour ce connecter
  static function login($email, $password){
    global $db;
    $stat = $db->prepare('SELECT * FROM utilisateur where mailcli = ? AND passwordcli = ?');
    $stat->execute(array($email,$password));
    return $stat->fetch();
}

// nouvelle demande
static function adddemande($numterain,$superficie,$ilot,$lot,$idtype,$idqua,$cni,$cession,$datedemande,$statut,$detail,$iduser)	
  {
    global $db;
    $stat = $db->prepare('INSERT INTO demande (numterain,superficie,ilot,lot,idtype,idqua,cni,cession,datedemande,statut,detail,id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)');
    $stat->execute([$numterain,$superficie,$ilot,$lot,$idtype,$idqua,$cni,$cession,$datedemande,$statut,$detail,$iduser]);
  }
 
  // nouveau rendez vous 
  static function rendez($daterdv,$heure,$iduser)	
  {
    global $db;
    $stat = $db->prepare('INSERT INTO rendez (daterdv,heure,iduser) VALUES(?,?,?)');
    $stat->execute([$daterdv,$heure,$iduser]);
  }

  //All rendezvous

  static function allrdv($iduser)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM rendez where iduser = ? ORDER BY id DESC');
    $stat->execute([$iduser]);
    return $stat->fetchAll();
  }

  //annuler rdv
  static function deleterdv($id)
  {
    global $db;
    $stat = $db->prepare('DELETE FROM rendez WHERE id=?');
    $stat->execute([$id]);
  }
// Modifier les rdv
static function modirdv($modidate,$modiheure,$id){
  global $db;
  $stat = $db->prepare("UPDATE rendez SET daterdv=?, heure=?  WHERE id=?");
  $stat->execute([$modidate,$modiheure,$id]);
  
}

// Selectionner la liste des demande du client 
static function userdemande($id){
  global $db;
  $stat = $db->prepare("SELECT demande.id,quartier.libellequa,modele.libelle,demande.numterain,demande.ilot,demande.lot,demande.detail,demande.superficie,demande.idadd,demande.datedemande,demande.statut
  FROM demande,quartier,modele,utilisateur 
  WHERE demande.id = utilisateur.id AND demande.idqua = quartier.idqua AND demande.idtype = modele.idtype 
  AND demande.id  = ? 
  ORDER by demande.idadd DESC ");
  $stat->execute([$id]);
  return $stat -> fetchAll();
}
// Annuler sa demande  demande 
static function annuledemande($statut,$detail,$idadd){
  global $db;
  $stat = $db->prepare("UPDATE demande SET statut=?, detail= ? WHERE idadd =?");
  $stat->execute([$statut,$detail,$idadd]);
  
}
//recuper infomration utlisateur connecter
static function profil ($id){
  global $db;
  $stat = $db->prepare("SELECT * FROM utilisateur WHERE id= ?");
  $stat->execute([$id]);
  return $stat -> fetch();
}

// demande en Attente du cldient 
static function demandeAttente($statut,$id){
  global $db;
  $stat = $db->prepare("SELECT * FROM demande WHERE statut = ? and id= ?");
  $stat->execute([$statut,$id]);
  return $stat -> fetchAll();
}

// demande Accepté
static function permis($statut,$id){
  global $db;
  $stat = $db->prepare("SELECT * FROM demande WHERE statut = ? and id= ?");
  $stat->execute([$statut,$id]);
  return $stat -> fetchAll();
}

// Nombre de Rdv client 
static function Rdv($id){
  global $db;
  $stat = $db->prepare("SELECT * FROM rendez WHERE  iduser = ?");
  $stat->execute([$id]);
  return $stat -> fetchAll();
}


}



