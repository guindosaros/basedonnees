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
	
    <title><?= ucfirst($page) ?></title>
</head>
<body>
  
  <?php  include_once ('views/includes/header.php');?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
  <div class="col-md-8" id="internation" style="  height: 700px;" >

              <h4 style="text-align:center; margin-top : 20px;" >  Bienvenue sur notre Plateforme Vous disposer actuellement de : </h4>
              <div class="row" id="bord" style="margin-top: 80px;  margin-left: 100px;">

              <div class="card col-md-3" style="align-items:center;background-color: aqua;" onclick="window.location.href='/education/user'">
                    <i class="fas fa-ad" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                        
                    
                    <h4 class="card-title">  Attente  <?=  $demande   ?>    </h4>
                    <p class="card-text">
                      <h4> </h4>
                    </p>
                    </div>
                </div>
                <div class="card col-md-3" style="align-items:center;margin-left:15px;margin-right:15px;background-color:antiquewhite;" onclick="window.location.href='/education/admin'">
                    <i class="far fa-calendar-alt" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">

                    <h4 class="card-title"> RDV <?=  $rdv   ?> </h4>
                    <p class="card-text"></p>
                    </div>
                </div>
                <div class="card col-md-3" style="align-items:center;background-color:#7286d4;" onclick="window.location.href='/education/user'">
                    <i class="fas fa-university" style="font-size:150px;color:aliceblue;margin-top:20px;" style="width : 45px" ></i>
                    <div class="card-body">

                <h4 class="card-title"> Permis  <?=  $permis   ?> </h4>
                   
                    <p class="card-text"></p>
                    </div>
                </div>
              </div>

                
           </div>
           </div>
          </div>
<?php  include_once ('views/includes/footer.php');?>
</body>
</html>

