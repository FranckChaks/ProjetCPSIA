<section class="container-fluid" style="width: 100%; height: 100vh; background: url('css/front.jpg') 100% 100%">
    <div class="row">
        <div class="col-sm-6 mt-5 ml-5" style="background: white; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
            <h1 class="font-text mt-3"><b>Section administrative</b> <small>Connexion</small></h1>
            <form action="?action=connexion" method="post">
                <article class="form-group">
                    <label>Login</label>
                    <input type="text" name="login" class="form-control col-6"/>
                </article>
                <article class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="mdp" class="form-control col-6"/>
                    <button type="submit" class="btn btn-success mt-5" name="submit">Connexion</button>
                </article>
            </form>
        </div>
    </div>
</section>
<?php js();?>
