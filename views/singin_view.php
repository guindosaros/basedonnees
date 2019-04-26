<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/insc.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
    <title><?= ucfirst($page) ?></title>
    <style>

body {
    padding-top:50px;
}
fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    background: #fbfbfb;
    opacity: 1;
}
legend {
   color: #678;
   
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:maroon;
    font-size: 112%;
}
     </style>
</head>
<body>
    <br><br>
  <div class="container">
	<div class="row">
        <div class="col-md-12">
 <form action="singin" method="POST" enctype="multipart/form-data" id="fileForm" role="form">
        <fieldset><legend class="text-center">Formulaire d'inscription. <span class="req"><small> Champ obligatoire *</small></span></legend>
        <div style="color: red; font-size: 80%"><?=$error; ?></div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Nom et prenom </label>
                 <input   type="text" name="nom"  id="phone" class="form-control"  placeholder="Nom et prenom"/> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Date de Naissance </label>
                    <input   type="date" name="naissance"   id="phone" class="form-control"  placeholder="Date de Naissance"/> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Adresse Mail </label>
                    <input   type="text" name="mail"  id="phone" class="form-control"  placeholder="Adresse Mail"/> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Numero Telephone: </label>
                    <input   type="text" name= "contact"  id="phone" class="form-control"  placeholder="Numero Telephone"/> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phonenumber"><span class="req">* </span> Lieu habitation </label>
                <input   type="text" name="habi" id="phone" class="form-control phone"  placeholder="Lieu habitation"/> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phonenumber"><span class="req">* </span>Mots de pass </label>
                <input   type="password" name= "mdp" id="phone" class="form-control phone"  placeholder="Mots de pass"/> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="exampleFormControlFile1"><span class="req">* </span> image</label>
               <input type="file" class="form-control-file" id="exampleFormControlFile1" id="img" name="imgph" accept="image/*">  
            </div>
        </div>
            
    </div>
        <div class="form-group">
                    <input class="btn btn-success" type="submit" name="submit_reg" value="S'inscrire">
        </div>
    </div>
    
</div>
</div>
</form><!-- ends register form -->
</body>
</html>