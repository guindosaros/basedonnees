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

    <style>
          .etoile{
              color : red !important;
            }


   </style>


</head>
<body>
 
  
  <?php  include_once ('views/includes/header.php');?>
  <div class="col-md-8" id="internation" style="  height: 700px;" >
     <br>
      <h4 style="text-align : center; text-transform :uppercase;"> Demande de  Permis de construction </h4>
     <br>
     <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Formulaire de demande </h2>
                        <p style="color : white" > Demander Un permis de construction pour votre explitation partout sans vous deplacer et nous traiterons Aprés verification au prés des service competente dans un delai de  d'une semaine.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Information sur votre exploitation </h4>
                <h4 style="color: red; font-size: 15px"><?=$error; ?></h4>
                <form action="addemande" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="Full Name">Numero du terrain  <span class="etoile"> *</span> </label>
                          <input id="Full Name" name="terrain" placeholder="N° Terrain" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">le lot du terrain  <span class="etoile"> *</span> </label>
                          <input type="text" class="form-control" name="lot" id="inputEmail4" placeholder="N° du lot">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="Full Name">Ilot du terrain  <span class="etoile"> *</span></label>
                          <input id="Full Name" name="ilot" placeholder="N° Ilot du terrain " class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Superficie du Terrain en Km <span class="etoile"> * </span> </label>
                          <input type="text" class="form-control" name="superficie" id="inputEmail4" placeholder="Superficie du terrain ">
                        </div>
                      </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputState"> Quartier  <span class="etoile"> *</span> </label>
                                  <select id="inputState" name="quartier" class="form-control">
                                    <option value="">Quartier</option>
                                    <?php
                                $quartier = Choix::allquartier();
									foreach($quartier as $qua)
									{
								?>
								
								<option value="<?= $qua['idqua']; ?>"><?= $qua['libellequa']; ?></option>
								<?php
									}
								?>
                                  </select>
                        </div>
                <div class="form-group col-md-6">
                           <label for="inputmodele"> Type de Construction   <span class="etoile"> *</span> </label>
                                  <select id="inputmodele" name="modele" class="form-control">
                                    <option value="">Type de construction </option>
                                    <?php
                                $modele = Choix::alltype();
									foreach($modele as $type)
									{
								?>
								
								<option value="<?= $type['idtype']; ?>"><?= $type['libelle']; ?></option>
								<?php
									}
								?>
                   </select>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="img1"> Attestaion de cession de terrain  <span class="etoile"> *</span> </label>
                          <input type="file" class="custom-file-input" id="img1" name="cession" accept="image/*">
                          <label class="custom-file-label" for="img1"> Attestation de cession </label>
                        </div>
                        <div class="form-group col-md-12">
                          <input type="file" class="custom-file-input" id="img" name="cni" accept="image/*">
                          <label class="custom-file-label" for="img"> CNI recto-verso </label>
                        </div> 
                      </div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary"> Envoyer </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
           </div>
           </div>
          </div>
<?php  include_once ('views/includes/footer.php');?>
</body>
</html>

