<div class="container">


    <?php if(isset($_GET['id']) && !isset($_GET['action'])){ ?>
        <form action="" method="post">
            <section class="row">
                <div class="col-12">
                    <div class="float-right mt-2 mr-2" style="color: black">
                        <i class="fa fa-shopping-basket"></i> Panier de
                        <form action="">
                            <select name="id_u" id="select-user">
                                    <option value="<?=$id_user_selected;?>"><?=$user;?></option>
                                <?php foreach (utilisateur::getOtherUsers() as $k=>$v){ ?>
                                    <option value="<?=$v['id_u'];?>"><?=$v['prenom']." ".$v['nom'];?></option>
                                <?php } ?>
                            </select>
                            <b>0,00€</b>
                            <a href="<?=URL_HOME;?>/panier/<?=$id_user_selected;?>">Voir</a>
                        </form>
                    </div>
                </div>
            </section>

            <section class="row text-center mt-3">
                <?php
                foreach(categorie::getCategories() as $k=>$v){ ?>
                    <div class="col-2">
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
            <section>
                <div class="row mt-5">
                    <?php foreach ($produit as $k=>$v){ ?>
                    <div class="col-3 text-center">
                        <img src="<?=URL_HOME;?>/css/<?=$v['img_p'];?>" height="200px" width="80%"><br>
                        <span>
                            <b><?=$v['libelle_p'];?></b>
                            <?=$v['prix_p'];?>€<br>
                            <label for="quantite">Quantité </label>
                            <select name="quantite">
                                <?php $i = 1; while($i <= 15){ ?>
                                <option value="<?=$i;?>"><?=$i;?></option>
                                <?php $i++; } ?>
                            </select>
                        <button type="submit" name="add" class="add-product" value="<?=$v['id_p'];?>"><i class="fa fa-plus-circle"></i></button> <br>
                        <a href="<?=URL_HOME;?>/produit?action=2&id=<?=$v['id_p'];?>"><small><i class="fa fa-edit"></i> Modifier</small></a>
                    </div>
                    <?php } ?>
                </div>
            </section>
        </form>
    <?php } ?>


<!--    Modification  -->

    <?php if(isset($_GET['action']) && $_GET["action"] == 2){ ?>
        <section class="row">
                <div class="col-12">
                    <button class="btn btn-primary mb-3"><i class="fa fa-arrow-left"></i> Retour</button>
                    <h2>Modifier un produit</h2>
                </div>
        </section>

        <form action="" method="post">
            <section class="row">
                    <div class="col-4" style="border-right: 1px solid silver">
                        <img src="<?=URL_HOME;?>/css/<?=$img_p;?>" height="220" width="200"><br>
                        <label for="img_p"><b>Changer l'image</b></label>
                        <input type="file" name="img_p" class="btn btn-primary" value="<?=$img_p;?>">
                    </div>
                    <div class="col-8">
                        <label for="img_p"><b>Nom</b></label>
                        <h2><input type="text" name="libelle_p" value="<?=$nom_p;?>"></h2>
                        <label for="img_p"><b>Prix</b></label><br>
                        <input type="text" name="prix_p" value="<?=$prix_p;?>">€<br><br>
                        <input type="submit" name="submit" value="Valider">
                    </div>
            </section>
        </form>

        <section class="row mt-5 text-center" style="background: white; padding-top: 10px; padding-bottom: 10px">
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