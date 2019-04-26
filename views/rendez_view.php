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
        .table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
            border: 1px solid #ff3547!important;
        }        
        .table.table-bordered th {
            text-align: center;
}
 .note
{
    
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
.dark-row{
    background:#AEC5E8;
    
}
.light-row{
    
    background:#F1F3F0;
}
 
    </style>
    <title><?= ucfirst($page) ?></title>
</head>
<body>
  
  <?php  include_once ('views/includes/header.php');?>
  <div class="col-md-8" id="internation" style="  height: 700px;" >
     <br>
      
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Nouveau RDV
    </button>
     <br>
     <div class="container register-form">
        </div>
        <br>
        <h4 style="text-align : center; text-transform :uppercase;"> Suivie de vos different rendez-vous  </h4>
        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>n°</th>
                                <th>jours</th>
                                <th>Heure</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($rdv as $rd) :?>
                            <tr>
                                <th scope="row"><?php echo  $rd['id'];?></th>
                                <td><?php echo  $rd['daterdv'];?></td>
                                <td><?php echo  $rd['heure'];?></td>
                                <td> <a data-title="Delete" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash text-danger mr-4"></i></a>
                                     <a data-title="Edit" data-toggle="modal" data-target="#<?php echo 'modal'.$rd['id'];?>"><i class="fas fa-edit text-success"></i></a>
                            </td>
                            </tr>
                            <div class="modal fade" id="<?php echo 'modal'.$rd['id'];?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading"><h6 style="text-align : center; text-transform :uppercase;"> Modifier les information de votre rdv </h6></h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
          <form  action="editrdv" method="post">
            <div class="form">
                <div class="form-content">
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                            <label for="jours"> Jours  <span class="etoile"> *</span> </label>
                                <input type="date" class="form-control" id="jours" name="jours" placeholder=" Jours  *" value="<?php echo  $rd['daterdv'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date"> Heure <span class="etoile"> *</span> </label>
                                <input type="Time" class="form-control" id="date"  name="heure" placeholder=" heure du rendez vous*" value="<?php echo  $rd['heure'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="date"  name="idrdv" placeholder=" heure du rendez vous*" value="<?php echo  $rd['id'];?>"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Modifier</button>
                </div>
            </div>
       </form>
        </div>
      </div>
          <div class="modal-footer ">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Annuler</button>
      </div>
      
        </div>
  </div>
    </div>
                     <?php endforeach; ?>
                        </tbody>
                    </table>
           </div>
           </div>
          </div>

    <!--  modal de Modification -->
   
    <!--  Modal de supression -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Confirmation de supression </h4>
            </div>
                <div class="modal-body">
            
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> êtes vous sûre d'annuler ce rendez-vous ?</div>
            
            </div>
        <div class="modal-footer ">
        <button type="button" onclick="document.location.href ='rendez-<?= $rd['id'] ?>' " class="btn btn-danger" ><span class="glyphicon glyphicon-ok-sign"></span>Oui</button>
        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Non</button>
      </div>
        </div>
  </div>
    </div>
<!--  Modal de d'ajout de rendez-vous -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h6 style="text-align : center; text-transform :uppercase;"> Prend rendez au prés de nos Services </h6></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="rendez" method="post">
            <div class="form">

                <div class="form-content">
                    <div class="row">

                    <div class="col-md-6">
                            <div class="form-group">
                            <label for="jours"> Jours  <span class="etoile"> *</span> </label>
                                <input type="date" class="form-control" id="jours" name="jours" placeholder=" Jours  *" value=""/>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date"> Heure <span class="etoile"> *</span> </label>
                                <input type="Time" class="form-control" id="date"  name="heure" placeholder=" heure du rendez vous*" value=""/>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">RESERVER</button>
                </div>
            </div>
       </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<?php  include_once ('views/includes/footer.php');?>
</body>
</html>

