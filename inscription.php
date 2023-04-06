<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

    <nav class="bg-primary d-flex justify-content-center align-items-center" style="min-height: 50px;">
        <a href="index.php" class="text-white text-decoration-none me-3">Accueil</a>
        <a href="connexion.php" class="text-white text-decoration-none me-3">Connexion</a>
    </nav>


    <form method="post" id="myForm" class="form-group container text-center d-flex flex-column align-items-center justify-content-center">
        <label for="nom" class="mt-3">Nom</label>
        <input type="text" id="nom" name="nom" class="form-control mt-3 w-50 text-center">

        <label for="prenom" class="mt-3">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="form-control mt-3 w-50 text-center">

        <label for="email" class="mt-3">Email</label>
        <input type="email" id="email" name="email" class="form-control mt-3 w-50 text-center">

        <label for="password" class="mt-3">MDP</label>
        <input type="password" id="password" name="password" class="form-control mt-3 w-50 text-center">

        <label for="passwordConf" class="mt-3">Confirmation MDP</label>
        <input type="password" id="passwordConf" name="passwordConf" class="form-control mt-3 w-50 text-center">

        <input type="submit" id="btnInscription" value="Valider" name="submit" class="mt-3 w-50 text-center">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>