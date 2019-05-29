<?php
include("../0-config/config.php");

if (isset($_GET['action']) && $_GET['action'] == "connexion") {
    $c = new connexion();

    $c->connexion();
}
?>


<!doctype html>
<html lang="fr">
<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../01-Style/css/bootstrap.min.css">
</head>
<body>
<section class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-4 login-block">
                <h1>Connexion</h1>
                <hr>
                <form action="?action=connexion" method="post">
                    <label for="login">Login</label>
                    <input type="text" name="login" class="form-control col-10">
                    <br>
                    <label for="login">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control col-10">
                    <br>
                    <button type="submit" class="btn btn-success">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
    <?=URL_HOME?>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
