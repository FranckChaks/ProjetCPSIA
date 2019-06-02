<div class="container">
    <section class="row">
        <div class="col-12 mt-3">
            <h2>Gestion des utilisateurs</h2>
        </div>
    </section>

    <?php if(!isset($_GET['action'])){ ?>
    <section class="row">
        <a href="<?=URL_HOME;?>/utilisateur?action=1"><button class="btn btn-success">Ajouter</button> </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Client</th>
                <th>Login</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Panier</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($listUser as $k=>$v) { ?>
                <tr>
                    <td><?=$v['prenom']." ".$v['nom'];?></td>
                    <td><?=$v['login'];?></td>
                    <td><?=$v['email'];?></td>
                    <td><?=$v['numero']." ".$v['rue'].", ".$v['ville'];?></td>
                    <td><?=$v['tel'];?></td>
                    <td><a href="<?=URL_HOME;?>/panier/<?=$v['id_u'];?>">Voir le panier</a> </td>
                    <td>
                        <a href="<?=URL_HOME;?>/utilisateur?action=3&id=<?=$v['id_u'];?>"><button class="btn btn-danger float-right ml-3">Supprimer</button></a>
                        <a href="<?=URL_HOME;?>/utilisateur?action=2&id=<?=$v['id_u'];?>"> <button class="btn btn-warning float-right">Modifier</button></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </section>
    <?php } ?>

    <?php if(isset($_GET['action']) && $_GET['action'] == 1) { ?>
        <form action="" method="post">
            <section class="row">
                <div class="col-6">
                    <div class="form-group col-8">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group col-8">
                        <label for="Prénom">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>
                    <div class="form-group col-8">
                        <label for="adresse">Rue</label>
                        <input type="text" class="form-control" name="rue">
                    </div>
                    <div class="form-group col-8">
                        <label for="numero">N° de rue</label>
                        <input type="text" class="form-control" name="numero">
                    </div>
                    <div class="form-group col-8">
                        <label for="numero">Ville</label>
                        <input type="text" class="form-control" name="ville">
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group col-8">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group col-8">
                        <label for="tel">Tel</label>
                        <input type="text" class="form-control" name="tel">
                    </div>
                    <div class="form-group col-8">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                    <div class="form-group col-8">
                        <label for="Mdp">Mdp</label>
                        <input type="text" class="form-control" name="mdp">
                    </div>
                    <div class="form-group col-8">
                       <button class="btn btn-success" type="submit" name="submit">Ajouter</button>
                    </div>
                </div>
            </section>
        </form>
    <?php } ?>

    <?php if(isset($_GET['action']) && $_GET['action'] == 2) { ?>
        <form action="" method="post">
            <section class="row">
                <div class="col-6">
                    <div class="form-group col-8">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" name="nom" value="<?=$nom;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="Prénom">Prénom</label>
                        <input type="text" class="form-control" name="prenom" value="<?=$prenom;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="adresse">Rue</label>
                        <input type="text" class="form-control" name="rue" value="<?=$rue;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="numero">N° de rue</label>
                        <input type="text" class="form-control" name="numero" value="<?=$numero;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control" name="ville" value="<?=$ville;?>">
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group col-8">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="<?=$email;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="tel">Tel</label>
                        <input type="text" class="form-control" name="tel" value="<?=$tel;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login" value="<?=$login;?>">
                    </div>
                    <div class="form-group col-8">
                        <label for="login">Mot de passe</label>
                        <input type="text" class="form-control" name="mdp" value="<?=$mdp;?>">
                    </div>
                    <div class="form-group col-8">
                        <button class="btn btn-success" type="submit" name="submit">Modifier</button>
                    </div>
                </div>
            </section>
        </form>
    <?php } ?>

</div>