<?php menu();?>
<div class="content">
    <div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Votre Panier</h1>

            <table class="table mt-5">
                <thead>
                <tr>
                    <th>Article</th>
                    <th></th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; while($i < 5){ ?>
                <tr>
                    <td style="width: 76px">
                        <img src="assets/css/food.png" height="75px" width="75px">
                    </td>
                    <td><b>Jeans</b></td>
                    <td>30€</td>
                    <td>2</td>
                    <td>60€</td>
                    <td><i class="fa fa-trash"></i> </td>
                </tr>
                <?php $i++; } ?>
                <tr>
                    <td><h3>Total</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h3>240€</h3></td>
                </tr>
                </tbody>
            </table>

            <button class="btn-accueil float-right mr-5">Valider les achats <i class="fa fa-check-circle"></i></button>
            <a href="produit" class="href"><button class="btn-accueil2 mr-5"> Continuer le shopping <i class="fa fa-shopping-basket"></i></button></a>
        </div>
    </div>
    </div>
</div>
