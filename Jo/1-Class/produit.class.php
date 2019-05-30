<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 30/05/2019
 * Time: 14:24
 */

class produit
{
    public $id_p;
    public $libelle_p;
    public $desc_p;
    public $prix_p;
    public $img_p;
    public $id_c;

    public function __construct()
    {
        $this->id_p = 0;
        $this->libelle_p = "";
        $this->desc_p = "";
        $this->prix_p = 0;
        $this->img_p = "";
        $this->id_c = 0;
    }

    public function getProduit($id)
    {
        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

        $req = "SELECT * FROM produit WHERE id = :id";

        $bind = array();
        $bind['id'] = $id;

        $res = $bdd->prepare($req);
        $res->execute($bind);

        $ligne = $res->fetch(PDO::FETCH_ASSOC);
        return $ligne;
    }

    public static function datagrid()
    {
        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

        $req = "SELECT * FROM produit";

        $res = $bdd->prepare($req);
        $res->execute();
        $liste = array();

        while ($ligne = $res->fetch(PDO::FETCH_ASSOC))
            $liste[] = $ligne;

        ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom produit</th>
                    <th>Description</th>
                    <th>prix</th>
                    <th>image</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($liste as $k => $v) {?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$v["libelle_p"]?></td>
                        <td><?=$v["description_p"]?></td>
                        <td><?=$v["prix_p"]?>€</td>
                        <td><img src="<?=$v["img_p"]?>" width="100px" height="100px"></td>
                        <td><a href="form.php?action=2&id=<?=$v['id_p'];?>" class="btn btn-warning">Modifier</a>
                            <a href="form.php?action=3&id=<?=$v['id_p'];?>" class="btn-suppr btn btn-danger" data-prenom="<?=$v['prenom'];?>" data-nom="<?=$v['nom'];?>">Supprimer</a>
                            <a href="index.php?action=4&id=<?=$v['id_p'];?>" class="btn btn-success">Voir le produit</a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
