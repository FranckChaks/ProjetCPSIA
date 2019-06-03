<div class="container">


    <?php if(isset($_GET['id']) && !isset($_GET['action'])){ ?>
            <section class="row">
                <div class="col-12">
                    <a href="<?=URL_HOME;?>/produit?action=1"><button class="btn btn-primary my-3">Gestion des produits</button></a>
                    <div class="float-right mt-2" style="color: black">
                        <form action="<?=URL_HOME;?>/produit?changeUser" method="post">
                        <i class="fa fa-shopping-basket"></i> Panier de

                            <select name="id_u" id="select-user" onchange="this.form.submit()">
                                    <option value="<?=$id_user_selected;?>"><?=$user;?></option>
                                <?php foreach (utilisateur::getOtherUsers() as $k=>$v){ ?>
                                    <option value="<?=$v['id_u'];?>"><?=$v['prenom']." ".$v['nom'];?></option>
                                <?php } ?>
                            </select>
                            <b><?=$total;?>€</b>
                            <a href="<?=URL_HOME;?>/panier/<?=$id_user_selected;?>"><u>Voir</u></a>
                        </form>
                    </div>
                </div>
            </section>

            <section class="row text-center mt-3">
                <?php
                foreach(categorie::getCategories() as $k=>$v){ ?>
                    <div class="col-md-2 col-sm-6">
                        <a href="<?=URL_HOME;?>/produit/<?=$v['id_c'];?>">
                            <div class="bloc-category2">
                                <h5><?=$v['nom_c'];?></h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </section>

            <section class="row">
                <div class="col-12 mt-3">
                    <b>Catégorie:</b> <?=$nom_c;?>
                </div>
            </section>
        <form action="" method="post">
            <section>
                <div class="row mt-2">
                    <?php foreach ($produit as $k=>$v){
                        $s = new stock();
                        $s->getStock($v['id_p']);  ?>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="bloc-product">
                            <img src="<?=URL_HOME;?>/css/<?=$v['img_p'];?>" height="200px" width="80%"><br>
                            <span>
                                <b><?=$v['libelle_p'];?></b>
                                <?=$v['prix_p'];?>€<br>
                                <label for="quantite">Quantité </label>
                                <select name="quantite">
                                    <?php $i = 1; while($i <= $s->quantite){ ?>
                                        <option value="<?=$i;?>"><?=$i;?></option>
                                    <?php $i++; } ?>
                                </select>
                            <button type="submit" name="add" class="add-product" value="<?=$v['id_p'];?>" title="Ajouter au panier"><i class="fa fa-plus-circle"></i></button> <br>
                            <a href="<?=URL_HOME;?>/produit?action=2&id=<?=$v['id_p'];?>"><small class="modify"><i class="fa fa-edit"></i> Modifier</small></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
        </form>
    <?php } ?>


<!--    Gestion produit  -->

    <?php if(isset($_GET['action']) && $_GET["action"] == 1){ ?>

        <section class="row mt-4">
            <div class="col-12 mt-4">
                <h2 class="title-gestion">Gestion des produits
<!--                <button class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Ajouter</button>-->
                </h2>
            </div>
        </section>
        <a href="<?=URL_HOME;?>/produit?action=4"><button class="btn btn-success float-right ml-3"><i class="fa fa-plus"></i> Ajouter</button></a>
        <section class="row">
                <table class="table" style="background: white">
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Prix</th>
                            <th>Quantité en stock</th>
                            <th>Catégorie</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($liste_p as $k=>$v) { ?>
                        <tr>
                            <td><?=$v['libelle_p'];?></td>
                            <td><?=$v['prix_p'];?></td>
                            <td><?=$v['quantite'];?></td>
                            <td><?=$v['nom_c'];?></td>
                            <td>
                                <a href="<?=URL_HOME;?>/produit?action=3&id=<?=$v['id_p'];?>"><button class="btn btn-danger float-right ml-3"><i class="fa fa-trash"></i> Supprimer</button></a>
                                <a href="<?=URL_HOME;?>/produit?action=2&id=<?=$v['id_p'];?>" <button class="btn btn-warning float-right"><i class="fa fa-edit"></i> Modifier</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </section>

    <?php } ?>

    <?php if(isset($_GET['action']) && $_GET["action"] == 4){ ?>

    <section class="row">
        <div class="col-12 mt-4">
            <h2 class="title-gestion">Gestion des produits: Ajouter</h2>
        </div>
    </section>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="row mb-4">
            <div class="col-12">
                Nom <input type="text" class="form-control col-3" name="libelle_p">
            </div>
            <div class="col-12">
                Prix <input type="text" class="form-control col-3" name="prix_p">
            </div>
            <div class="col-12">
                Description <input type="text" class="form-control col-3" name="description_p">
            </div>
            <div class="col-12">
                Image<br> <input type="file" name="img_p" class="form-control col-3"  >
            </div>
            <div class="col-12">
                Quantité <br> <input type="number" name="stock" class="form-control col-3">
            </div>
            <div class="col-12">
                Catégorie<br>
                <select name="id_c" class="form-control col-3" >
                    <?php foreach(categorie::getCategories() as $k=>$v){ ?>
                        <option value="<?=$v['id_c'];?>"><?=$v['nom_c'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-12">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                <button type="submit" class="btn btn-success mt-4" name="addProduct"><i class="fa fa-plus"></i> Ajouter</button>
            </div>
        </div>
    </form>

    <?php } ?>



<!--    Modification  -->

    <?php if(isset($_GET['action']) && $_GET["action"] == 2){ ?>
        <section class="row">
                <div class="col-12">
                    <h2>Modifier un produit</h2>
                </div>
        </section>

        <form action="" method="post" enctype="multipart/form-data">
            <section class="row">
                    <div class="col-4" style="border-right: 1px solid silver">
                        <img src="<?=URL_HOME;?>/css/<?=$img_p;?>" height="220" width="200"><br>
                        <label for="img_p"><b>Changer l'image</b></label>
                        <input type="file" name="img_p" class="btn btn-primary" value="<?=$img_p;?>">
                    </div>
                    <div class="col-8">
                        <label for="img_p"><b>Nom</b></label>
                        <h2><input type="text" name="libelle_p" class="col-5 form-control" value="<?=$nom_p;?>"></h2>
                        <label for="img_p"><b>Prix (€)</b></label><br>
                        <input type="text" name="prix_p" value="<?=$prix_p;?>" class="col-5 form-control">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                        <input type="submit" name="submit" value="Valider" class="btn btn-success mt-5">
                    </div>
            </section>
        </form>

        <section class="row mt-5 text-center" style="padding-top: 10px; padding-bottom: 10px">
            <span class="col-12 mb-4"><h3>Tous les produits</h3></span>
            <?php foreach (produit::getProduit() as $k=>$v){ ?>
            <div class="col-2 mb-4">
                <img src="<?=URL_HOME;?>/css/<?=$v['img_p'];?>" height="70" width="70"><br>
                <span><b><?=$v['libelle_p'];?></b> <?=$v['prix_p'];?>€</span><br>
                <a href="<?=URL_HOME;?>/produit?action=2&id=<?=$v['id_p'];?>" class="href"><button class="btn btn-warning"><i class="fa fa-pencil"></i> Modifier</button></a>
            </div>
            <?php } ?>
        </section>
    <?php } ?>


</div>