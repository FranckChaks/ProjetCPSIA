<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 02/06/2019
 * Time: 16:52
 */

class categorie
{
    public $id_c;
    public $nom_c;

    public function __construct()
    {
        $this->id_c = 0;
        $this->nom_c = "";
    }

    public static function getCategories()
    {
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM categorie");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function charger()
    {
        global $bdd;
        $req = $bdd->query("SELECT * FROM categorie WHERE id_c = " . $this->id_c);
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $this->nom_c = $ligne['nom_c'];
    }

    public function getLaCategorie($id)
    {
        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

        $req = "SELECT * FROM categorie WHERE id_c = :id";

        $bind = array();
        $bind['id'] = $id;

        $res = $bdd->prepare($req);
        $res->execute($bind);

        $ligne = $res->fetch(PDO::FETCH_ASSOC);

        $this->nom_c = $ligne['nom_c'];
    }

    public function select()
    {
        $res = self::getCategories();

        ?>
        <div class="container mt-5">
            <table class="table" style="background: white">
                <thead>
                    <tr>
                        <th>Nom categorie</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach ($res as $key => $v)
            {
                ?>
                       <tr>
                        <td><?=$v['nom_c'];?></td>
                        <td>
                            <a href='<?=URL_HOME;?>/categorie?action=2&cas=<?=$v['id_c'];?>'>
                                <button class="btn btn-warning">Modifier</button>
                            </a>
                            <a href='<?=URL_HOME;?>/categorie?action=3&cas=<?=$v['id_c'];?>'>
                            <button class="btn btn-danger">Supprimer</button>
                            </a>
                        </td>
                      </tr>
            <?php
            }
            ?>
                </tbody>
            </table>
        </div>
        <?php
    }
        // Creer catégorie
    public function createForm()
    {
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <form method="post">
                            <input class="form-control" type="text" name="nom_c" placeholder="Le nom de votre catégorie">
                            <button type="submit" name="submit" class="btn btn-success">Créer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public function create()
    {
        global $bdd;

        $nom = $_POST['nom_c'];
        $bind = array();
        $bind['nom_c'] = $nom;

        $req = "INSERT INTO categorie(nom_c) VALUE(:nom_c)";
        $res = $bdd->prepare($req);
        $res->execute($bind);
    }

    //modifier une categorie
    public function modifForm($id)
    {
        $this->getLaCategorie($id);
        ?>
            <div class="form-group">
                <form method="post">
                    <input type="text" class="form-control" value="<?=$this->nom_c ?>" name="nom_c">
                    <button type="submit" name="submit">Modifier</button>
                </form>        
            </div>
        <?php
    }


    public function modif()
    {
        global $bdd;
        $nom = $_POST['nom_c'];
        $id = $_GET['cas'];

        $bind = array();
        $bind['nom_c'] = $nom;
        $bind['id'] = $id;

        $req = "UPDATE categorie SET nom_c = :nom_c WHERE id_c = :id";
        $res = $bdd->prepare($req);
        $res->execute($bind);
    }

    // supprimer catégorie
    public function suppr($id)
    {
        global $bdd;

        $bind = array();
        $bind['id'] = $id;
        $req = "DELETE FROM categorie WHERE id_c = :id";

        $res = $bdd->prepare($req);
        $res->execute($bind);
    }
}
