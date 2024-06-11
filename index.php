<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="s.css">
    <title>Document</title>
</head>
<body class="index-bg">
    
    <main>
        <div class="connexion">
            <h2 class="mb-3 text-center">Connexion</h2>
            <p class="mb-3 text-center">Connectez-vous pour ouvrir une session</p>
            <form action="admin/connexion.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" name='mot_de_passe' class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary form-control">Connexion</button>
            </form>
            <p class="mt-3 text-center">Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous</a> </p>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>