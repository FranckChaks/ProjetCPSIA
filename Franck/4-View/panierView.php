<div class="container">
<!--    <form action="" method="post">-->
<!--        <section class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="float-right mt-2 mr-2" style="color: black">-->
<!--                    <i class="fa fa-shopping-basket"></i> Panier de-->
<!--                    <select name="id_u" id="select-user">-->
<!--                        <option value="--><?//=$id_user_selected;?><!--">--><?//=$user;?><!--</option>-->
<!--                        --><?php //foreach (utilisateur::getOtherUsers() as $k=>$v){ ?>
<!--                            <option value="--><?//=$v['id_u'];?><!--">--><?//=$v['prenom']." ".$v['nom'];?><!--</option>-->
<!--                        --><?php //} ?>
<!--                    </select>-->
<!--                    <b>0,00€</b>-->
<!--                    <a href="--><?//=URL_HOME;?><!--/panier/--><?//=$id_user_selected;?><!--">Voir</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--    </form>-->

    <section class="row">
        <div class="col-12 mb-5 mt-3">
           <h2>Articles dans le panier</h2>
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

    <section class="row">
        <div class="col-12">
            <button class="btn btn-warning">Continuer les achats</button>
            <button class="btn btn-primary float-right">Valider le panier</button>
        </div>
    </section>


</div>