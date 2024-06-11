<?php
  session_start();
?>
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
              <span class="d-none d-md-block dropdown-toggle ps-2 text-header"><?php echo isset($_SESSION['utilisateur_nom']) ? $_SESSION['utilisateur_nom'] : 'Invité'; ?></span>
            </a><!-- End Profile Iamge Icon -->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li>
                <a class="dropdown-item d-flex align-items-center" href="mon-compte.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Mon compte</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="admin/logout.phpç">
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
        <form action="" class="mt-3 row g-3 py-3">
            <div class="col-auto">
                <input type="text" class="form-control" name="nom" placeholder="Nom de l'utilisateur">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Faire une recherche</button>
            </div>
        </form>
        <div class="table">
        <table class="mt-3 table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Username</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Voir</th>
                    <th scope="col">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>AJAVON</td>
                    <td>Ayi Daniel</td>
                    <td>ghost</td>
                    <td>M</td>
                    <td>ayidanielajavon@gmail.com</td>
                    <td>Admin</td>
                    <td><a href="modifier.php"><img src="./assets/img/stylo.png" alt=""></a></td>
                  <td><a href="view-user.php"><img src="./assets/img/voir.png" alt=""></a></td>
                  <td><a href="#"><img src="./assets/img/supprimer.png" alt=""></a></td>
                    
                    
                  </tr>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>