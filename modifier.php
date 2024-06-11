<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="s.css">
    <title>Document</title>
</head>
<body>
    
    <main>
    <section class="section container mt-5">
              <div class="row">
                <div class="col-lg-12">
        
                  <div class="card new-user">
                    <div class="card-body">
                      <h5 class="card-title">Modifier des utilisateurs</h5>
        
                      <!-- General Form Elements -->
                      <form>
                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input disabled type="text" value="AJAVON" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Prénom</label>
                            <input disabled type="text" value="Ayi Daniel" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input disabled type="text" value="ghos" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input disabled type="text" value="ayidanielajavon@gmail.com" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sexe</label>
                            <select disabled class="form-select" aria-label="Default select example">
                                <option value="1">Masculin</option>
                                <option value="2">Feminin</option>
                              </select>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                                <option value="1">Modérateur</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                              </select>
                        <div class="row mb-3 mt-3">
                          <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <a href="user-list.php" class="btn btn-success">Retour</a>
                          </div>
                        </div>
        
                      </form><!-- End General Form Elements -->
        
                    </div>
                  </div>
        
                </div>
        
               
              </div>
            </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>