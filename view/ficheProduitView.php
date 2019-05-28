<?php menu();?>
<div class="content">
    <section class="float-right mt-2 mr-3"><span class="mr-5">Bienvenue Admin</span> <a href="panier" class="href"><b>0,00€</b> <i class="fa fa-shopping-cart"></i></a>  </section><br>
    <div class="container">
        <div class="row" style="width: 100%">
            <div class="col-6 mt-5">
                <img src="assets/css/jeans.png" height="400px" width="100%">
            </div>
            <div class="col-6 mt-5" style="border-left: 1px solid rgba(182,182,182,0.72)">
                <h1>Jeans</h1>
                <h3>30,00€</h3>


                <h4 class="mt-5">
                    <small>//Si c'est des fringues--></small>
                     Taille
                    <small>
                        <select name="size" class="ml-4">
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                            <option value="xxl">XXL</option>
                        </select>
                    </small>
                </h4>

                <h4 class="mt-3">Quantité
                    <small>
                        <select name="quantite" class="ml-1">
                        <?php $i = 1; while($i <= 15){ ?>
                            <option value="<?=$i;?>"><?=$i;?></option>
                            <?php $i++; } ?>
                        </select>
                    </small>
                </h4>

                <button class="btn-accueil mt-5 mb-5"><i class="fa fa-shopping-basket"></i> Ajouter au panier</button>

                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto, aut deserunt dolor, enim fuga illo ipsum non praesentium sapiente vero voluptatem voluptates? Error laudantium odit placeat quasi temporibus, ut.</p>

            </div>
        </div>


        <div class="row mt-5">
            <div class="col-12">
                <h4>Voir aussi</h4>
                <hr>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="ficheProduit" class="href"><div class="card-1 select-produit">
                        <img src="assets/css/jeans.png" height="80%" width="90%">
                        <p style=" padding-bottom: 10px"><b>Jeans</b><br>
                            <small>30€</small></p>
                    </div></a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="ficheProduit" class="href"><div class="card-1 select-produit">
                        <img src="assets/css/jeans.png" height="80%" width="90%">
                        <p style=" padding-bottom: 10px"><b>Jeans</b><br>
                            <small>30€</small></p>
                    </div></a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="ficheProduit" class="href"><div class="card-1 select-produit">
                        <img src="assets/css/jeans.png" height="80%" width="90%">
                        <p style=" padding-bottom: 10px"><b>Jeans</b><br>
                            <small>30€</small></p>
                    </div></a>
            </div>
        </div>
    </div>


</div>
