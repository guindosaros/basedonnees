<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Import de la police Montserrat-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<style>
    .contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

*{
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
}

a, h1, h2, h3, p{
    text-decoration: inherit;
    color: inherit;
}
.main-container{
    color: #fff;
    display: flex;
    position: relative;
    justify-content: space-around;
    background: url(./assets/images/back.jpg) no-repeat center;
    background-size: cover;
    height: 100vh;
}
.main-container .blur{
    background-color: rgb(0, 0, 0, .6);
    position: absolute;
    z-index: 3p;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
}
#mainNav .navbar-toggler {
  font-size: 12px;
  right: 0;
  padding: 13px;
  text-transform: uppercase;
  color: white;
  border: 0;
  background-color: #fed136;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

#mainNav .navbar-brand {
  color: #fed136;
  font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

#mainNav .navbar-brand.active, #mainNav .navbar-brand:active, #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
  color: #fec503;
}

#mainNav .navbar-nav .nav-item .nav-link {
  font-size: 90%;
  font-weight: 400;
  padding: 0.75em 0;
  letter-spacing: 1px;
  color: white;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

#mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
  color: #fed136;
}

@media (min-width: 992px) {
  #mainNav {
    padding-top: 25px;
    padding-bottom: 25px;
    -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
    transition: padding-top 0.3s, padding-bottom 0.3s;
    border: none;
    background-color: transparent;
  }
  #mainNav .navbar-brand {
    font-size: 1.75em;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }
  #mainNav .navbar-nav .nav-item .nav-link {
    padding: 1.1em 1em !important;
  }
  #mainNav.navbar-shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
  }
  #mainNav.navbar-shrink .navbar-brand {
    font-size: 1.25em;
    padding: 12px 0;
  }
}
.main-container .container{
    z-index: 6;
    display: flex;
    align-items: center;
    max-width: 1400px;
}
.container .sec0{
	margin: 50px auto;
	
	
}
.service-heading {
  margin: 15px 0;
  text-transform: none;
}
.container .sec1{
    background-color: #00bb7d;
    margin-left: 25px;
    width: 300px;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 20px;
	border-radius: 15px;
	margin: 50px auto;
	width: 450px;
}

body {
  overflow-x: hidden;
  font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

p {
  line-height: 1.75;
}

a {
  color: #fed136;
}

a:hover {
  color: #fec503;
}

.text-primary {
  color: #fed136 !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 700;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

section {
  padding: 100px 0;
}

section h2.section-heading {
  font-size: 40px;
  margin-top: 0;
  margin-bottom: 15px;
}

section h3.section-subheading {
  font-size: 16px;
  font-weight: 400;
  font-style: italic;
  margin-bottom: 75px;
  text-transform: none;
  font-family: 'Droid Serif', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

@media (min-width: 768px) {
  section {
    padding: 150px 0;
  }
}

.btn {
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
  font-weight: 700;
}

.btn-xl {
  font-size: 18px;
  padding: 20px 40px;
}

.btn-primary {
  background-color: #fed136;
  border-color: #fed136;
}

.btn-primary:active, .btn-primary:focus, .btn-primary:hover {
  background-color: #fec810 !important;
  border-color: #fec810 !important;
  color: white;
}

.btn-primary:active, .btn-primary:focus {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
  box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
}

::selection {
  background: #fed136;
  text-shadow: none;
}

img::selection {
  background: transparent;
}

img::-moz-selection {
  background: transparent;
}

#mainNav {
  background-color: #212529;
}

#mainNav .navbar-toggler {
  font-size: 12px;
  right: 0;
  padding: 13px;
  text-transform: uppercase;
  color: white;
  border: 0;
  background-color: #fed136;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

#mainNav .navbar-brand {
  color: #fed136;
  font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

#mainNav .navbar-brand.active, #mainNav .navbar-brand:active, #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
  color: #fec503;
}

#mainNav .navbar-nav .nav-item .nav-link {
  font-size: 90%;
  font-weight: 400;
  padding: 0.75em 0;
  letter-spacing: 1px;
  color: white;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

#mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
  color: #fed136;
}

@media (min-width: 992px) {
  #mainNav {
    padding-top: 25px;
    padding-bottom: 25px;
    -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
    transition: padding-top 0.3s, padding-bottom 0.3s;
    border: none;
    background-color: transparent;
  }
  #mainNav .navbar-brand {
    font-size: 1.75em;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }
  #mainNav .navbar-nav .nav-item .nav-link {
    padding: 1.1em 1em !important;
  }
  #mainNav.navbar-shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
  }
  #mainNav.navbar-shrink .navbar-brand {
    font-size: 1.25em;
    padding: 12px 0;
  }
}

header.masthead {
  text-align: center;
  color: white;
  background-image: url("../img/header-bg.jpg");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;
}

header.masthead .intro-text {
  padding-top: 150px;
  padding-bottom: 100px;
}

header.masthead .intro-text .intro-lead-in {
  font-size: 22px;
  font-style: italic;
  line-height: 22px;
  margin-bottom: 25px;
  font-family: 'Droid Serif', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

header.masthead .intro-text .intro-heading {
  font-size: 50px;
  font-weight: 700;
  line-height: 50px;
  margin-bottom: 25px;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

@media (min-width: 768px) {
  header.masthead .intro-text {
    padding-top: 300px;
    padding-bottom: 200px;
  }
  header.masthead .intro-text .intro-lead-in {
    font-size: 40px;
    font-style: italic;
    line-height: 40px;
    margin-bottom: 25px;
    font-family: 'Droid Serif', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
  }
  header.masthead .intro-text .intro-heading {
    font-size: 75px;
    font-weight: 700;
    line-height: 75px;
    margin-bottom: 50px;
    font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
  }
}

.service-heading {
  margin: 15px 0;
  text-transform: none;
}


@media (min-width: 767px) {
  #portfolio .portfolio-item {
    margin: 0 0 30px;
  }
}

.timeline {
  position: relative;
  padding: 0;
  list-style: none;
}

.timeline:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 40px;
  width: 2px;
  margin-left: -1.5px;
  content: '';
  background-color: #e9ecef;
}

.timeline > li {
  position: relative;
  min-height: 50px;
  margin-bottom: 50px;
}

.timeline > li:after, .timeline > li:before {
  display: table;
  content: ' ';
}

.timeline > li:after {
  clear: both;
}

.timeline > li .timeline-panel {
  position: relative;
  float: right;
  width: 100%;
  padding: 0 20px 0 100px;
  text-align: left;
}

.timeline > li .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}

.timeline > li .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}

.timeline > li .timeline-image {
  position: absolute;
  z-index: 100;
  left: 0;
  width: 80px;
  height: 80px;
  margin-left: 0;
  text-align: center;
  color: white;
  border: 7px solid #e9ecef;
  border-radius: 100%;
  background-color: #fed136;
}

.timeline > li .timeline-image h4 {
  font-size: 10px;
  line-height: 14px;
  margin-top: 12px;
}

.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  padding: 0 20px 0 100px;
  text-align: left;
}

.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}

.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}

.timeline > li:last-child {
  margin-bottom: 0;
}

.timeline .timeline-heading h4 {
  margin-top: 0;
  color: inherit;
}

.timeline .timeline-heading h4.subheading {
  text-transform: none;
}

.timeline .timeline-body > ul,
.timeline .timeline-body > p {
  margin-bottom: 0;
}

@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    min-height: 100px;
    margin-bottom: 100px;
  }
  .timeline > li .timeline-panel {
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    left: 50%;
    width: 100px;
    height: 100px;
    margin-left: -50px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 13px;
    line-height: 18px;
    margin-top: 16px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
  }
}

@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4 {
    font-size: 18px;
    line-height: 26px;
    margin-top: 30px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}

@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4 {
    margin-top: 40px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}


section#contact {
  background-color: #212529;
  background-image: url("../img/map-image.png");
  background-repeat: no-repeat;
  background-position: center;
}

section#contact .section-heading {
  color: #fff;
}

section#contact .form-group {
  margin-bottom: 25px;
}

section#contact .form-group input,
section#contact .form-group textarea {
  padding: 20px;
}

section#contact .form-group input.form-control {
  height: auto;
}

section#contact .form-group textarea.form-control {
  height: 248px;
}

section#contact .form-control:focus {
  border-color: #fed136;
  -webkit-box-shadow: none;
  box-shadow: none;
}

section#contact ::-webkit-input-placeholder {
  font-weight: 700;
  color: #ced4da;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

section#contact :-moz-placeholder {
  font-weight: 700;
  color: #ced4da;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

section#contact ::-moz-placeholder {
  font-weight: 700;
  color: #ced4da;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

section#contact :-ms-input-placeholder {
  font-weight: 700;
  color: #ced4da;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

footer {
  padding: 25px 0;
  text-align: center;
}

footer span.copyright {
  font-size: 90%;
  line-height: 40px;
  text-transform: none;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

footer ul.quicklinks {
  font-size: 90%;
  line-height: 40px;
  margin-bottom: 0;
  text-transform: none;
  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

ul.social-buttons {
  margin-bottom: 0;
}

ul.social-buttons li a {
  font-size: 20px;
  line-height: 50px;
  display: block;
  width: 50px;
  height: 50px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  color: white;
  border-radius: 100%;
  outline: none;
  background-color: #212529;
}

ul.social-buttons li a:active, ul.social-buttons li a:focus, ul.social-buttons li a:hover {
  background-color: #fed136;
}

.sec0 h2{
    font-size: 2em;
    margin-bottom: 15px;
}
.yForm{
    display: flex;
    flex-direction: column;
    text-align: center;
}
.yForm button{
    height: 25px;
    border: none;
    border-radius: 15px;
    padding: 0 15px;
	color: #fff;
	width: 150px;
    background-color: #00875a;
    cursor: pointer;
}
.yForm .inputG{
    font-size: 18px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 15px;
}
.inputG input, .inputG select{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 15px;
    padding: 0 15px;
    text-align: center;
}
#regImg{
    width: 250px;
}
.toReg h2{
    font-size: 14px;
}

#plat
{
    font-size: 25px;
}




  </style>		

    <title><?= ucfirst($page) ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Mairie Attecoube</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacter</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#connexion">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="singin">inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
	<div class="main-container" id="connexion">
		<div class="blur"></div>
		<div class="container">
			<div class="sec0">
				<h6 id="plat"> PLATEFORME DE DEMANDE DE PERMIS DE CONSTRUCTION EN LIGNE </h6>
				<p> Cette plateforme est Une platforme de la Mairie d'attecoube  <br> Demande ACD Legalisation de Terrain et vente des Terrain de Construction. Partout Et tous Moment Consulter Votre demande et Prend Rendez avec les Service<br> technique de ela mairie.. </p>
			</div>
			<div class="sec1">
				<div class="log yForm">
					<h2>Connecter Vous</h2>
					<form method="POST" action="home">
						<div class="inputG">
							<label for="logMail">Votre Mail</label>
							<input id="logMail" name="mail" type="text">
						</div>
						<div class="inputG">
							<label for="logPass">Mots de pass </label>
							<input id="logPass" name="pwd" type="password">
						</div>
						<div style="color: red; font-size: 70%"><?=$error; ?></div>
						<button type="submit">Connexion</button>
					</form>
					<div class="toReg">
						<h2> Enregistrer Vous Sur notre platforme ?</h2>
						<button onclick="document.location.href ='singin' "> s'enregistrer </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="services" style="background-color:#f8f9fa!important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Permis de Construction</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-copy fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Permis Construction</h4>
          <p class="text-muted">Service de Demande en Ligne de permis de construction </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-drafting-compass fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Visite Technique</h4>
          <p class="text-muted">visite potographique</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-copy fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Legalisation de Terrain</h4>
          <p class="text-muted">Service de Legalisation de Terrain en ligne </p>
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nous Contacter</h2>
          <h3 class="section-subheading text-muted">Connacter Pour Plus d'information .</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Votre Nom *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Adresse Mail *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder=" Telephone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Votre Message  *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  

<script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/agency.min.js"></script>

</body>
</html>