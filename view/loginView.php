<?php
if(isset($_GET['action']) && $_GET['action'] == "connexion"){
    $c = new login;
    $c->Connexion();
}
?>
<div class="wallpaper"></div>
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
</section>
