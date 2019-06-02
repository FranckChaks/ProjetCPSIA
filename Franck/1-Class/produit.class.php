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
    public $description_p;
    public $prix_p;
    public $img_p;
    public $id_c;

    public function __construct()
    {
        $this->libelle_p = "";
        $this->description_p = "";
        $this->prix_p = 0;
        $this->img_p = "";
        $this->id_c = 0;
    }

    public function charger()
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM produit WHERE id_p = ".$this->id_p);
        $req->bindValue('id_c', $this->id_p, PDO::PARAM_INT);
        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);

        $this->libelle_p      = $ligne['libelle_p'];
        $this->description_p  = $ligne['description_p'];
        $this->prix_p         = $ligne['prix_p'];
        $this->img_p          = $ligne['img_p'];
    }

    public function ajouter(){
        global $bdd;
        $req = $bdd->prepare('INSERT INTO produit(libelle_p, description_p,  prix_p, img_p, id_c) VALUES (:libelle_p, :description_p,  :prix_p, :img_p, :id_c)');
        $req->bindValue(':libelle_p', $this->libelle_p, PDO::PARAM_STR);
        $req->bindValue(':description_p', $this->description_p, PDO::PARAM_STR);
        $req->bindValue(':prix_p', $this->prix_p, PDO::PARAM_STR);
        $req->bindValue(':img_p', $this->img_p, PDO::PARAM_STR);
        $req->bindValue(':id_c', $this->id_c, PDO::PARAM_INT);
        $req->execute();

        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function Modifier(){
        global $bdd;
        $req = $bdd->prepare("UPDATE produit SET libelle_p  = :libelle_p,
                                                           prix_p     = :prix_p,
                                                           img_p      = :img_p
                                                           WHERE id_p = ".$this->id_p);
        $req->bindValue(':libelle_p', $this->libelle_p, PDO::PARAM_STR);
        $req->bindValue(':prix_p',    $this->prix_p,    PDO::PARAM_STR);
        $req->bindValue(':img_p',     $this->img_p,     PDO::PARAM_STR);
        $req->execute();
        $req->fetch(PDO::FETCH_ASSOC);

        header("location".URL_HOME."/produit?action=2&id=".$this->id_p);

    }

    public static function getProduit()
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM produit ORDER BY libelle_p");
        $req->execute();
        $ligne = $req->fetchAll(PDO::FETCH_ASSOC);
        return $ligne;
    }

    public function getProduitByCategory($id){
        global $bdd;

        $req = "SELECT * FROM produit WHERE id_c = :id";

        $bind = array();
        $bind['id'] = $id;

        $res = $bdd->prepare($req);
        $res->execute($bind);

        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function supprimer(){
        global $bdd;
        $req = $bdd->prepare("DELETE FROM produit WHERE id_p = :id_p");
        $req->bindValue(':id_p', $this->id_p, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
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
                        <td><img src="css/<?=$v["img_p"]?>" width="100px" height="100px"></td>
                        <td><a href="form.php?action=2&id=<?=$v['id_p'];?>" class="btn btn-warning">Modifier</a>
<!--                            <a href="form.php?action=3&id=--><?//=$v['id_p'];?><!--" class="btn-suppr btn btn-danger" data-prenom="--><?//=$v['prenom'];?><!--" data-nom="--><?//=$v['nom'];?><!--">Supprimer</a>-->
<!--                            <a href="index.php?action=4&id=--><?//=$v['id_p'];?><!--" class="btn btn-success">Voir le produit</a>-->
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
