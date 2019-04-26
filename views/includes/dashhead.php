<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dash">Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="dash">Dashboard</a></li>
            <li><a href="dashdemande">Tous les demande </a></li>
            <li><a href="traitement">demande non traité</a></li>
            <li><a href="rdv">Liste rendez</a></li>
            <li><a href="users">Utilisateurs</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= $image ;?>"class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $nom ;?></span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="<?= $image ;?>" class="img-circle" alt="User Image">

                <p style="color:black">
                   <?= $nom;?>
                  <small>administrateur</small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-right">
                  <a href="adminlogout" class="btn btn-default btn-flat">deconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard<small> administrateur</small></h1>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>