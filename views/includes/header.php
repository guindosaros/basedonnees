<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px;">
                <a class="navbar-brand" href="#">Mairie Attecoube</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      
                    </li>
                    <li class="nav-item">
                      
                    </li>
                    <li class="nav-item dropdown">
                      
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                      </div>
                    </li>
                    <li class="nav-item">
 
                    </li>
                </ul>
                
                     <label class="label" style="margin-right: 60px;"> Utilisateur Connecter : <span class="userImg"> <img class="rounded-circle"  src="<?= $image ;?>" height="45" width="45" onclick="document.location.href = 'profil' " > </span></i> <?= $nom ?> </label>
          
                     <a href="logout" ><button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-sign-out-alt"></i></button></a>
                </div>
              </nav>
         <div class="container-fluid">
          <div class="row">
              <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Menu Principal</h3>
            <strong>SC</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="principal">
                    <i class="fas fa-home"></i>
                    Tableau de Bord 
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Permis de Construire
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addemande">Nouvelle demande </a>
                    </li>
                    <li>
                        <a href="demande">Liste de mes demandes </a>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a href="#Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-briefcase"></i>
                    Terrain 
                </a>
                <ul class="collapse list-unstyled" id="Submenu">
                    <li>
                        <a href="terrain"> Nouveaux Terrain </a>
                    </li>
                    <li>
                        <a href="terrainlis">Terrain en vente</a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="rendez">
                <i class="far fa-calendar-alt"></i> Rendez-Vous</a>
            </li>
            <!-- <li>
                <a href="addmatiere">
                <i class="fas fa-ad"></i>
                    Acheter un Terrain
                </a>
            </li> -->
        </ul>
    </nav>