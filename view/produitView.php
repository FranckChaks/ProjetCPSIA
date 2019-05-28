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
                        <li class="nav-item">
                            <a class="nav-link" id="food-tab" data-toggle="pill" href="#food">Alimentaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">Electroménager</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">High-Tech</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">...</a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all">
                <div class="row mb-5">
                <?php $i = 0; while($i <10) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                        <a href="ficheProduit" class="href">
                            <div class=" card-1 select-produit">
                                <img src="assets/css/jeans.png" height="80%" width="100%">
                                <p style=" padding-bottom: 10px"><b>Jeans</b><br>
                                    <small>30€</small>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php $i++; } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="food">
                    <div class="row mb-5">
                        <?php $i = 0; while($i <10) { ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                                <div class="select-produit card-1">
                                    <img src="assets/css/food.png" height="80%" width="100%">
                                    <p style=" padding-bottom: 10px"><b>Légumes</b><br>
                                        <small>10€</small></p>
                                </div>
                            </div>
                        <?php $i++; } ?>
                </div>
            </div>
        </div>
    </div>
</div>
