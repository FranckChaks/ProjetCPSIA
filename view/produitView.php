<?php menu();?>
    <div class="content">
        <section>
            <div class="categorie-produit mb-3 mt-3">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Alimentaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Electroménager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">High-Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">...</a>
                    </li>
                        <li class="nav-item float-right">   <!--- Barre de recherche  - Mettre à droite-->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rechercher...">
                                <div class="input-group-append">
                                    <button class="input-group-text"> <i class="fa fa-search"></i> </button>
                                </div>
                            </div>
                        </li>
                    <a href="categorie" class="btn-categorie"><button class="btn btn-primary"><i class="fa fa-pencil"></i> Gérer les categories</button></a>
                </ul>
            </div>
            <div class="front-produit fadeIn">      <!-- Premier onglet-->
                    <h2>Des produits de qualité à un prix raisonnable</h2>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <button class="btn btn-success float-right"><i class="fa fa-plus"></i>Ajouter un produit</button><br><br>
                        <?php $i = 0; while($i <18){ //Test affichage ?>

                        <a class="href" href="FicheProduit">
                            <div class="card mb-4 card-1" style="width: 12rem; display: inline-block">
                                    <img class="card-img-top" src="assets/css/wallpaper.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Ananas: 1000€
                                            <a href="panier"><button class="btn btn-primary float-right ml-1"><i class="fa fa-shopping-cart" title="Ajouter au panier"></i></button></a>
                                        </p>
                                    </div>
                                </a>
                            </div>

                        <?php $i++; }?>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">    <!-- Deuxième onglet-->
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquid animi blanditiis fugiat illo libero molestias voluptatum. Accusantium cupiditate expedita id molestiae odio odit optio quas reiciendis, rem sunt totam?
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">    <!-- Troisième onglet-->
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquid animi blanditiis fugiat illo libero molestias voluptatum. Accusantium cupiditate expedita id molestiae odio odit optio quas reiciendis, rem sunt totam?
                    </div>
                </div>
            </div>
        </section>
    </div>
