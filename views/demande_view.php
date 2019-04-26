<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <style>

      .table {
          border: none;
      }

      .table-definition thead th:first-child {
          pointer-events: none;
          background: white;
          border: none;
      }

      .table td {
          vertical-align: middle;
      }

   </style>
	
    <title><?= ucfirst($page) ?></title>
</head>
<body>
  
  <?php  include_once ('views/includes/header.php');?>
  <div class="col-md-8" id="internation" style="  height: 700px;" >
     <br>
      <h4> </h4>
    <br>
    <div class="card mb-5" style=" width: 900px;">
            <div class="card-header">Liste de Vos differentes demande de Permis de Construction </div>
            <div class="card-block p-0">
            <table class="table table-bordered table-sm m-0" style=" width: 900px;">
  <thead>
    <tr style=" width: 900px; background-color: #f1f1f1;">
      <th scope="col">Terrain n°</th>
      <th scope="col">Lot et ilot</th>
      <th scope="col">Superficie</th>
      <th scope="col">Quartier</th>
      <th scope="col">type construction</th>
      <th scope="col">date demande</th>
      <th scope="col">statut</th>
      <th scope="col">Annuler</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach($liste as $ls) :?>
    <tr>
      <td scope="row"><?=    $ls['numterain'] ?></td>
      <td><?= "lot"." ". $ls['lot']. " "."ilot"." ".$ls['ilot']?></td>
      <td><?= $ls['superficie']." "."Km²"?></td>
      <td><?= $ls['libellequa'] ?></td>
      <td style="text-align:center; text-transform:lowercase;"><?= $ls['libelle'] ?></td>
      <td><?= $ls['datedemande'] ?></td>
      <td style="cursor: pointer;"><?php if($ls['statut'] == 0)
                    {
                   echo '<a data-title="Delete" data-toggle="modal" data-target="#infos'.$ls['idadd'].'"><span class="badge badge-secondary">en cours</span></a>';
                    }else if ($ls['statut'] == 1)
                    {
                      echo '<a data-title="Delete" data-toggle="modal" data-target="#infos'.$ls['idadd'].'"><span class="badge badge-success">Accepter</span></a>';
                  
                    }else if ($ls['statut'] == 2)
                    {
                      echo '<a data-title="Delete" data-toggle="modal" data-target="#infos'.$ls['idadd'].'"><span class="badge badge-danger">Rejeter</span></a>';
                    }else if ($ls['statut'] == 3)
                    {
        
                      echo '<a data-title="Delete" data-toggle="modal" data-target="#infos'.$ls['idadd'].'"><span class="badge badge-warning">Annuler</span></a>';
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
      <td style="text-align: center;cursor: pointer;"><a data-title="Delete" data-toggle="modal" data-target="#<?= 'delle'.$ls['idadd'] ?>"> <i class="fas fa-window-close text-danger mr-4"></i></a></td>
    </tr>
    <!-- Confirmation D'Annulation de la demande -->
    <div class="modal fade" id="<?= 'delle'.$ls['idadd'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
    </div> 
    <!-- le details du statut -->

  <?php endforeach ; ?>
  </tbody>
</table>         
            </div>
            <div class="card-footer p-0">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mt-3 mr-3">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active" ><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <span class="page-link">2<span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
<div class="modal fade" id="<?='infos'.$ls['idadd']?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading"> Annulez Votre demande </h4>
            </div>
                <div class="modal-body">
               <?=   $ls['superficie']   ?>
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> êtes vous sûre d'annuler cette demande ?</div>
               
            </div>
        <div class="modal-footer ">
        <button type="button" onclick="document.location.href ='#' " class="btn btn-danger" ><span class="glyphicon glyphicon-ok-sign"></span>Oui</button>
        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Non</button>
      </div>
    </div>
    
           </div>
           </div>
          </div>
<?php  include_once ('views/includes/footer.php');?>
</body>
</html>

