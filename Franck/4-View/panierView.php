<div class="container">
    <section class="row">
        <div class="col-12 mb-3 mt-5">
           <h2 class="title-gestion">Articles dans le panier</h2>
        </div>
        <div class="col-12 table-responsive">
            <table class="table" style="background: white">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix(€)</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($ligne as $k=>$v){ ?>
                <tr>
                    <td><img src="<?=URL_HOME;?>/css/<?=$v['img_p'];?>" height="70" width="70"> <?=$v['libelle_p'];?></td>
                    <td><?=$v['prix_p'];?></td>
                    <td><?=$v['quantite'];?></td>
                    <td><?=$v['quantite']*$v['prix_p'];?></td>
                    <td><a href="<?=URL_HOME;?>/panier?action=3&id1=<?=$v['id_u'];?>&id2=<?=$v['id_p'];?>"><i class="fa fa-trash" title="Supprimer"></i></a> </td>
                </tr>
            <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td><b><?=$total;?></b>€</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>

    <section class="row mb-3">
        <div class="col-12">
            <button class="btn btn-warning">Continuer les achats</button>
            <button class="btn btn-primary float-right">Valider le panier</button>
        </div>
    </section>


</div>