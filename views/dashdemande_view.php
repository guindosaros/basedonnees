<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title><?= ucfirst($page) ?></title>
    <style>

.navbar-nav > .user-menu > .dropdown-menu,
.navbar-nav > .user-menu > .dropdown-menu > .user-body {
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header {
  height: 175px;
  padding: 10px;
  text-align: center;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > img {
  z-index: 5;
  height: 90px;
  width: 90px;
  border: 3px solid;
  border-color: transparent;
  border-color: rgba(255, 255, 255, 0.2);
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > p {
  z-index: 5;
  color: #fff;
  color: rgba(255, 255, 255, 0.8);
  font-size: 17px;
  margin-top: 10px;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > p > small {
  display: block;
  font-size: 12px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-body {
  padding: 15px;
  border-bottom: 1px solid #f4f4f4;
  border-top: 1px solid #dddddd;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-body:before,
.navbar-nav > .user-menu > .dropdown-menu > .user-body:after {
  content: " ";
  display: table;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-body:after {
  clear: both;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-body a {
  color: #444 !important;
}
@media (max-width: 991px) {
  .navbar-nav > .user-menu > .dropdown-menu > .user-body a {
    background: #fff !important;
    color: #444 !important;
  }
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer {
  background-color: #f9f9f9;
  padding: 10px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer:before,
.navbar-nav > .user-menu > .dropdown-menu > .user-footer:after {
  content: " ";
  display: table;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer:after {
  clear: both;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default {
  color: #666666;
}
@media (max-width: 991px) {
  .navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default:hover {
    background-color: #f9f9f9;
  }
}
.navbar-nav > .user-menu .user-image {
  float: left;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  margin-right: 10px;
  margin-top: -2px;
}
@media (max-width: 767px) {
  .navbar-nav > .user-menu .user-image {
    float: none;
    margin-right: 0;
    margin-top: -8px;
    line-height: 10px;
  }
}
   </style>
  
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
   
  </head>

  <body>
      
  <?php  include_once ('views/includes/dashhead.php');?>
  <section id="main">
      <div class="container" >
        <div class="row">
          <div class="col-md-9">
            <div class="panel panel-default" style=" width: 1100px;">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">la Liste compléte des demande </h3>
              </div>
              <br> <br>
              <table class="table table-striped table-hover table-condensed" id="myTable" style=" width: 1100px;">
  <thead>
    <tr style=" width: 900px; background-color: #f1f1f1;">
      <th scope="col">Terrain n°</th>
      <th scope="col">client</th>
      <th scope="col">Lot et ilot</th>
      <th scope="col">Superficie</th>
      <th scope="col">Quartier</th>
      <th scope="col">Moelede</th>
      <th scope="col">date demande</th>
      <th scope="col">statut</th>
      <!-- <th scope="col">Cni</th>
      <th scope="col">Cession</th> -->
    </tr>
  </thead>
  <tbody>
  <?php  foreach($liste as $ls) :?>
  
    <tr>
      <td scope="row"><?=    $ls['numterain'] ?></td>
      <td><?= $ls['nomcli']  ?></td>
      <td><?= "lot"." ". $ls['lot']. " "."ilot"." ".$ls['ilot']?></td>
      <td><?= $ls['superficie']." "."Km²"?></td>
      <td><?= $ls['libellequa'] ?></td>
      <td style="text-align:center; text-transform:lowercase;"><?= $ls['libelle'] ?></td>
      <td><?= $ls['datedemande'] ?></td>
      <td style="cursor: pointer;"><?php if($ls['statut'] == 0)
                    {
                   echo '<a><span class="badge badge-secondary">en cours</span></a>';
                    }else if ($ls['statut'] == 1)
                    {
                      echo '<span class=" label label-success ">Accepter</span>';
                  
                    }else if ($ls['statut'] == 2)
                    {
                      echo '<a><span class="label label-danger">Rejeter</span></a>';
                    }else if ($ls['statut'] == 3)
                    {
        
                      echo '<a data-title="Delete" style=" text-decoration : none;" data-toggle="modal" data-target="#infos'.$ls['idadd'].'"><span class="label label-warning">Annuler</span></a>';
                    }
              ?>
           <!-- Information sur le statut -->

              <div class="modal fade" id="<?='infos'.$ls['idadd']?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 style="color:red" class="modal-title custom_align" id="Heading"> Suivie de Demande sur le terrain N° <?=   $ls['numterain']  ?> </h4>
            </div>
                <div class="modal-body">
              <p>
                 <?=   $ls['detail']   ?>
              </p>
            </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Ok</button>
      </div>
    </div>
     <!-- Fin  modal demande statut -->
          </td>
      <!-- <td><button class="btn btn-primary"><i class="fa fa-download"></i> <a style="color:#fff;text-decoration:none" href="<?=   $ls['cni']   ?>" download ></a></td>
      <td><button class="btn btn-primary"><i class="fa fa-download"></i> <a style="color:#fff;text-decoration:none" href="<?=   $ls['cession']   ?>" download ></a></button></td> -->
    </tr>
    <!-- Confirmation D'Annulation de la demande -->
    <!-- <div class="modal fade" id="<?= 'delle'.$ls['idadd'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading"> Annulez Votre demande </h4>
            </div>
                <div class="modal-body">
            
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> êtes vous sûre d'annuler cette demande ?</div>
            
            </div>
        <div class="modal-footer ">
        <button type="button" onclick="document.location.href ='annuler-<?= $ls['idadd'] ?>' " class="btn btn-danger" ><span class="glyphicon glyphicon-ok-sign"></span>Oui</button>
        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Non</button>
      </div>
        </div>
    </div>  -->
    <!-- le details du statut -->

  <?php endforeach ; ?>
  </tbody>
</table>        
            </div>

            <?php  include_once ('views/includes/dashfooter.php');?>