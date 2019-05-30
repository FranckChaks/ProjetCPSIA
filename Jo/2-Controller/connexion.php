<?php include("../0-config/config.php");
    if (isset($_GET['action']) && $_GET['action'] == "connexion")
    {
        $c = new connexion();
        $c->connexion();
    }
?>
<!doctype html>
<html lang="fr">
    <?php Head("Connexion"); ?>
  <body>
    <section class="container">
        <h1>Connexion</h1>
        <div class="row">
            <div class="col-sm-6">
                <h1>Section administrative <small>Connexion</small></h1>
                <form action="?action=connexion" method="post">
                    <article class="form-group">
                        <label>Login</label>
                        <input type="text" name="login" class="form-control"/>
                    </article>
                    <article class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="mdp" class="form-control"/>
                        <button type="submit" class="btn-success" name="submit">Connexion</button>
                    </article>
                </form>
            </div>
        </div>
    </section>
<?php js();?>
  </body>
</html>
