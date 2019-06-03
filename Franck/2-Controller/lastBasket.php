<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 04/06/2019
 * Time: 00:36
 */

Head("Historique Commande");
if (isset($_GET['opt'])) {
    $c = new commande();
    $res = $c->getDernierPanier($_GET['opt']);
    ?>

    <div class="col-sm-12">
        <table class="table">
            <thead class="thead_dark">
            <tr>
                <th>Nom produit</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($res as $key => $v) {
                ?>
                <tr>
                    <td>
                        <?= $v['nom_p']; ?>
                    </td>
                    <td>
                        <?= $v['prix_p']; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
}else
{
    header("location: ".URL_HOME."/index.php");
}
    ?>
