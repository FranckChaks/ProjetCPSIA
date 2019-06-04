<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 03/06/2019
 * Time: 14:54
 */
Head("Commande");
    if(isset($_GET['add'])){
        $id_u = (int)$_GET['add'];

        $c = new commande();
        $c->id_u = $id_u;
        $c->ajouter();

        header("location:".URL_HOME."/commande?opt=".$id_u);
    }
    if (isset($_GET['opt'])) {
        $comm = new commande();
        $res = $comm->getCommande($_GET['opt']);

        $ligne = $res->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($ligne);
//        die();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table-striped table">
                        <thead>
                        <tr>
                            <td>Date commande</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($ligne as $key => $v){ ?>
                            <tr>
                                <td><?= $v['date_c'];?></td>
                                <td>
                                    <a href="<?=URL_HOME;?>/lastBasket?opt=<?=$v['id_comm'];?>">Voir cette commande</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
    }else
    {
        ?>
        <div class="badge-danger">
            <h2>Aucune commande effectuée.</h2>
        </div>
<?php
    }
