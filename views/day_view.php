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
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="traitement" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> demande Non traité <span class="badge"><?= $nbreDemande; ?></span> </a>
              <a href="dashdemande" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> liste des  demandes <span class="badge"><?=  $totaldemande; ?></span> </a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Rendez-vous <span class="badge"><?= $nbrerdv ; ?></span></a>
              <a href="users" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Utilisateurs <span class="badge"><?= $nbreUser; ?></span></a>
            </div>

            <div class="well">
              <h4>Demande Traité</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $traiter ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $traiter ;?>%;">
                <?= $traiter ." % "; ?> 
                </div>
              </div>
              <h4> Demande Non Traité </h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $Nntraite  ?> " aria-valuemin="0" aria-valuemax="100" style="width: <?= $Nntraite; ?>%;">
                <?= $Nntraite ." % "; ?> 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">liste des different Rendez-vous</h3>
              </div>
              <br> <br>
              <table class="table table-striped table-hover table-condensed"   id="myTable">
  <thead>
    <tr>
      <th scope="col">Nom Client</th>
      <th>date rdv</th>
      <th>Heure</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($allrdv as $rdv) : ?>
    <tr>
      <th ><?= $rdv['nomcli'] ?></th>
      <td><?= $rdv['daterdv'] ?></td>
      <td><?= $rdv['heure'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
            </div>

            <?php  include_once ('views/includes/dashfooter.php');?>