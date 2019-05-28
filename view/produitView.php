<?php menu();?>
<div class="content">
    <section class="float-right mt-2 mr-3"><span class="mr-5">Bienvenue Admin</span> <b>0,00€</b> <i class="fa fa-shopping-cart"></i> </section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="categorie-produit mb-3 mt-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="pill" href="#all">Tous</a>
                        </li>
                        <?php foreach(categorie::getList() as $k=>$v){  ?>
                        <li class="nav-item">
                            <a class="nav-link" id="<?=$v['libelle_c']?>-tab" data-toggle="pill" href="#<?=$v['libelle_c']?>"><?=$v['libelle_c']?></a>
                        </li>
                        <?php }?>
                    </ul>
                </section>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="all"> <!--Tous les produits -->
                <div class="row mb-5">
                <?php foreach(produit::getAllProduct() as $k=>$v) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                        <a href="ficheProduit" class="href">
                            <div class=" card-1 select-produit">
                                <img src="assets/css/<?=$v['img_p'];?>" height="80%" width="100%">
                                <p style=" padding-bottom: 10px">
                                    <b><?=$v['libelle_p'];?></b>
                                    <br>
                                    <small><?=$v['prix_p'];?>€</small>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>

            <?php foreach(categorie::getList() as $k=>$v){  ?>
            <div class="tab-pane fade" id="<?=$v['libelle_c'];?>">  <!--produits par catégorie -->
                <div class="row mb-5">
                    <?php foreach($listeProduitCat[$v['id_c']-1] as $key=>$val){  ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                            <div class="select-produit card-1">
                                <img src="assets/css/<?=$val['img_p'];?>" height="80%" width="100%">
                                <p style=" padding-bottom: 10px">
                                    <b><?=$val['libelle_p'];?></b>
                                    <br>
                                    <small><?=$val['prix_p'];?>€</small>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</div>
