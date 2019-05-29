<?php
    include ('0-config/config.php');

    $c = new connexion();

    if (isset($_GET['action']))
    {
        if ($_GET['action'] == "logout")
        {
            $c->deconnexion();
        }
    }
?>

<!doctype html >
<html lang = "fr" >
  <head >
    <title >Projet CPSIA POO</title >
    <!--Required meta tags-->
    <meta charset = "utf-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no" >

    <!--Bootstrap CSS-->
    <link rel = "stylesheet" href = "01-Style/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "01-Style/css/animate.min.css">
  </head >
  <body >
  <section class="container">
      <div class="row">
          <a href="index.php?action=logout"><button class="btn-danger">Deconnexion</button></a>
          <br/>
          <h2>Voici la page accueil</h2>
          <?=$_SESSION['id']."   +  ".$_SESSION['login']." ! "?>
      </div>
  </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/css/animate.min.css"></script>
    <script src="assets/css/bootstrap.min.css"></script>
  </body >
</html >
