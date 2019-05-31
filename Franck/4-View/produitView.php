
<div class="container">





    <?php if(isset($_GET['action']) && $_GET["action"] == 2){ ?>
        <section class="row">
            <div class="col-12">
                <button class="btn btn-primary mb-3"><i class="fa fa-arrow-left"></i> Retour</button>
                <h2>Modifier un produit</h2>
            </div>
        </section>
    <?php } ?>


    <?php if(isset($_GET['id']) && !isset($_GET['action'])){ ?>
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
                    <span><b><?=$v['libelle_p'];?></b> <?=$v['prix_p'];?>€</span> <i class="fa fa-plus-circle"></i> <br>
                    <a href="<?=URL_HOME;?>/produit?action=2&id=<?=$v['id_p'];?>"><small><i class="fa fa-edit"></i> Modifier</small></a>
                </div>
                <?php } ?>
            </div>
        </section>
    <?php } ?>
</div>