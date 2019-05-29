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
                <?php foreach($panier as $k=>$v){ ?>
                <tr>
                    <td style="width: 76px">
                        <img src="assets/css/<?=$v['img_p'];?>" height="75px" width="75px">
                    </td>
                    <td><b><?=$v['libelle_p'];?></b></td>
                    <td><?=$v['prix_p'];?>€</td>
                    <td><?=$v['quantite'];?></td>
                    <td><?=$v['prix_p']*$v['quantite'];?>€</td>
                    <td>
                        <form action="#" method="post">
                        <a href="<?=BASE_URL;?>/panier?delete&id=<?=$v['id_p'];?>" <i class="fa fa-trash"></i>
                        </form>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td><h3>Total</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h3><?=$total;?><small>€</small></h3></td>
                </tr>
                </tbody>
            </table>

            <button class="btn-accueil float-right mr-5">Valider les achats <i class="fa fa-check-circle"></i></button>
            <a href="produit" class="href"><button class="btn-accueil2 mr-5"> Continuer le shopping <i class="fa fa-shopping-basket"></i></button></a>
        </div>
    </div>
    </div>
</div>
