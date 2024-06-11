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

      <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="user-list.php" class="logo d-flex align-items-center btn btn-primary"> Liste des utilisateur       </a>
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

      <section class="container pt-5">
      <div class="col-xl-12 mt-5">

<div class="card">
  <div class="card-body pt-3">
    <!-- Bordered Tabs -->
    <ul class="nav nav-tabs nav-tabs-bordered">

      <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Information</button>
      </li>

      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier mon profil</button>
      </li>

      

      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
      </li>

    </ul>
    <div class="tab-content pt-2">

      <div class="tab-pane fade show active profile-overview" id="profile-overview">

        <h5 class="card-title">Details du Profile </h5>

        <div class="row">
          <div class="col-lg-3 col-md-4 label ">Nom</div>
          <div class="col-lg-9 col-md-8">AJAVON</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Prénom</div>
          <div class="col-lg-9 col-md-8">Ayi Daniel</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Username</div>
          <div class="col-lg-9 col-md-8">ghost</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Pays</div>
          <div class="col-lg-9 col-md-8">USA</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Addresse</div>
          <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Phone</div>
          <div class="col-lg-9 col-md-8">+228 91 79 06 60</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Email</div>
          <div class="col-lg-9 col-md-8">ayidanielajavon@gmail.com</div>
        </div>

      </div>

      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

        <!-- Profile Edit Form -->
        <form>
        
          <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
            <div class="col-md-8 col-lg-9">
              <input name="fullName" type="text" class="form-control" id="fullName" value="AJAVON">
            </div>
          </div>
          <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
            <div class="col-md-8 col-lg-9">
              <input name="fullName" type="text" class="form-control" id="fullName" value="Ayi Daniel">
            </div>
          <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
            <div class="col-md-8 col-lg-9">
            <select class="form-select" aria-label="Default select example">
                <option value="1">Masculin</option>
                <option value="2">Feminin</option>
            </select>
            </div>
           
          </div>
          <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
            <div class="col-md-8 col-lg-9">
              <input name="fullName" type="text" class="form-control" id="fullName" value="ghost">
            </div>
          </div>

         

          <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
              <input name="company" type="text" class="form-control" id="company" value="ayidanielajavon@gmail.com">
            </div>
          </div>

          

          

        <div class="row mb-3 mt-3">
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Enregistré les modifications</button>
            </div>
        </div>
        </form><!-- End Profile Edit Form -->

      </div>

   

      <div class="tab-pane fade pt-3" id="profile-change-password">
        <!-- Change Password Form -->
        <form>

          <div class="row mb-3">
            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
            <div class="col-md-8 col-lg-9">
              <input name="password" type="password" class="form-control" id="currentPassword">
            </div>
          </div>

          <div class="row mb-3">
            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
            <div class="col-md-8 col-lg-9">
              <input name="newpassword" type="password" class="form-control" id="newPassword">
            </div>
          </div>

          <div class="row mb-3">
            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
            <div class="col-md-8 col-lg-9">
              <input name="renewpassword" type="password" class="form-control" id="renewPassword">
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Change Password</button>
          </div>
        </form><!-- End Change Password Form -->

      </div>

    </div><!-- End Bordered Tabs -->
      </section>
    
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>