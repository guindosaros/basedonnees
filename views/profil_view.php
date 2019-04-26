<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <title><?= ucfirst($page) ?></title>
    <style>
            .profile-usertitle {
                text-align: center;
                margin-top: 20px
            }

            .profile-usertitle-name {
                color: #5a7391;
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 7px
            }

            .profile-usertitle-job {
                text-transform: uppercase;
                color: #5b9bd1;
                font-size: 13px;
                font-weight: 800;
                margin-bottom: 7px
            }
</style>
</head>
<body>
<?php  include_once ('views/includes/header.php');?>
<div class="col-md-8" id="internation" style="  height: 700px;" >

		
			
<div class="col-md-12">  
    
<form class="row">
<div class="col-md-6">
      <br>      
    <div class="profile-userpic">
                <img src="<?=  $image   ?>" class="img-responsive img-circle" alt="" style="height:100px;"> 
    </div>
</div>
                <div class="col-md-6">
                    <div class="form-group">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Nom </label>
                        <input class="form-control" type="text" id="account-ln" value="<?=  $profile['nomcli']   ?>" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">E-mail</label>
                        <input class="form-control" type="email" id="account-email" value="<?=  $profile['mailcli']   ?>" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Numero</label>
                        <input class="form-control" type="text" id="account-phone" value="<?= $profile['contactcli']   ?>" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Mot de passe</label>
                        <input class="form-control" type="password" id="account-confirm-pass">
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <button class="btn btn-style-1 btn-primary">modifier</button>
                    </div>
                </div>
            </form>






</div>
</div>
</div>
<?php  include_once ('views/includes/footer.php');?>
</body>
</html>

