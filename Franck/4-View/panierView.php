<div class="container">
    <form action="" method="post">
        <section class="row">
            <div class="col-12">
                <div class="float-right mt-2 mr-2" style="color: black">
                    <i class="fa fa-shopping-basket"></i> Panier de
                    <select name="id_u">
                        <?php foreach (utilisateur::getUsers() as $k=>$v){ ?>
                            <option value="<?=$v['id_u'];?>"><?=$v['prenom']." ".$v['nom'];?></option>
                        <?php } ?>
                    </select> Voir
                    <b><?=$total;?>€</b>
                </div>
            </div>
        </section>
    </form>

    <section class="row">
        <div class="col-12 mb-5">
           <h2>X Articles dans le panier</h2>
        </div>
        <hr>
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
                    <td><input type="number" value="<?=$v['quantite'];?>" style="width: 50px"></td>
                    <td><?=$v['quantite']*$v['prix_p'];?></td>
                    <td><i class="fa fa-trash" title="Supprimer"></i> </td>
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

    <section class="row">
        <div class="col-12">
            <button class="btn btn-warning">Continuer les achats</button>
            <button class="btn btn-primary float-right">Valider le panier</button>
        </div>
    </section>


</div>