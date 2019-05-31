
<div class="container">

    <section class="row text-center">
        <div class="col-12 mt-3">
            <h1>Les meilleurs produits au meilleur prix</h1>
        </div>
    </section>

    <section class="row text-center mt-5">
        <div class="col-4">
            <img src="<?=URL_HOME;?>/css/jeans.png" height="220px" width="80%">
        </div>
        <div class="col-4">
            <img src="<?=URL_HOME;?>/css/jeans.png" height="220px" width="80%">
        </div>
        <div class="col-4">
            <img src="<?=URL_HOME;?>/css/jeans.png" height="220px" width="80%">
        </div>
    </section>

    <section class="row text-center mt-5">
        <?php
        foreach(categorie::getCategories() as $k=>$v){ ?>
            <div class="col-3">
                <a href="produit/<?=$v['id_c'];?>">
                    <div class="bloc-category">
                        <h2><?=$v['nom_c'];?></h2>
                    </div>
                </a>
            </div>
        <?php } ?>
    </section>


<!--                <h1>Gestion des Produits <small> All </small></h1>-->
<!--                <div class="col-sm-4">-->
<!---->
<!--                </div>-->
<!--                <hr>-->
<!---->
<!--                --><?php //produit::datagrid(); ?>
<!--                <div class="col">-->
<!--                    <a href="form.php?action=1" class="btn btn-primary">Ajouter un produit</a><br><br>-->
<!--                </div>-->



</div>