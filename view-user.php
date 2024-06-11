<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

      <header id="header" class="header d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="user-list.php" class="logo d-flex align-items-center btn btn-primary">Liste des utilisateur</a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->



      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profil.png" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2 text-header">Username</span>
            </a><!-- End Profile Iamge Icon -->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li>
                <a class="dropdown-item d-flex align-items-center" href="mon-compte.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Mon compte</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Deconnexion</span>
                </a>
              </li>
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        </ul>
      </nav><!-- End Icons Navigation -->

      </header><!-- End Header -->
    
    <main class="container">
       
    <div class="row mt-5">
      
      
      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">

                <h5 class="card-title">Détails du client</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nom</div>
                  <div class="col-lg-9 col-md-8">AJAVON</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Prénom</div>
                  <div class="col-lg-9 col-md-8">Ayi Daniel</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Sexe</div>
                  <div class="col-lg-9 col-md-8">Masculin</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Type</div>
                  <div class="col-lg-9 col-md-8">VIP</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Addresse</div>
                  <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Téléphone</div>
                  <div class="col-lg-9 col-md-8">+228 91 79 06 60</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">ayidanielajavon@gmail.com</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nationalité</div>
                  <div class="col-lg-9 col-md-8">Togolaise</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Carte</div>
                  <div class="col-lg-9 col-md-8">Oui</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Profession</div>
                  <div class="col-lg-9 col-md-8">Ingenieur logiciel</div>
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <a href="user-list.php" class="btn btn-success">Retour</a>
                    </div>
                </div>

              </div>

             

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>