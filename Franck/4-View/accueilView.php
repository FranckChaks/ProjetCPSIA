
<div class="container-fluid" >

    <section class="row text-center front">
        <div class="col-12 mt-3">
            <h1>Les meilleurs produits au meilleur prix</h1>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="<?=URL_HOME;?>/produit?action=1">
                <div class="accueil-bloc">
                    <h5>Gestion</h5>
                    <h2>Produit</h2>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="<?=URL_HOME;?>/utilisateur">
                <div class="accueil-bloc">
                    <h5>Gestion</h5>
                    <h2>Client</h2>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="<?=URL_HOME;?>/categorie">
                <div class="accueil-bloc">
                    <h5>Gestion</h5>
                    <h2>Catégorie</h2>
                </div>
            </a>
        </div>
    </section>

    <section class="row text-center mt-3 mb-4">
        <h2 class="font-text col-12 text-left" style="text-decoration: none">Sélectionnez une catégorie pour commencer les achats</h2>
        <?php
        foreach(categorie::getCategories() as $k=>$v){ ?>
            <div class="col-md-3 col-sm-12">
                <a href="produit/<?=$v['id_c'];?>">
                    <div class="bloc-category">
                        <h2><?=$v['nom_c'];?></h2>
                    </div>
                </a>
            </div>
        <?php } ?>
    </section>
</div>