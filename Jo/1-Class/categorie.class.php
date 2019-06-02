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

        return $ligne;
    }

    public function select()
    {
        $res = self::getCategories();

        ?>
        <select name="choix">
        <?php
        foreach ($res as $key => $v)
        {
            echo "<option value='".$v['id_c']."'>".$v['nom_c']."</option>";
        }
        ?>
        </select>
        <?php
    }
        // Creer catégorie
    public function createForm()
    {
        ?>
            <div class="form-group">
                <form method="post">
                    <input class="form-control" type="text" name="nom_c" placeholder="Le nom de votre catégorie">
                    <button type="submit" name="submit">Créer</button>
                </form>
            </div>
        <?php
    }

    public function create()
    {

        $nom = $_POST['nom_c'];
        echo $nom;
        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

        $bind = array();
        $bind['nom_c'] = $nom;

        $req = "INSERT INTO categorie(nom_c) VALUE(:nom_c)";
        $res = $bdd->prepare($req);
        $res->execute($bind);
    }

    //modifier une categorie
    public function modifForm($id)
    {
        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);
        
        $bind = array();
        $bind['id'] = $id;
        
        $req = $bdd->prepare("SELECT * FROM categorie WHERE id_c = :id");
        $req->execute($bind);
        
        $res = $req->fetch(PDO::FETCH_ASSOC);
        
        
        ?>
            <div class="form-group">
                <form action="post">
                    <input type="text" class="form-control" value="<?php $res['nom_c'] ?>">
                    <button type="submit" name="submit">Modifier</button>
                </form>        
            </div>
        <?php
        modif();
    }


    public function modif()
    {
        $nom = $_POST['nom_c'];

        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

        $bind = array();
        $bind['nom_c'] = $nom;

        $req = "UPDATE categorie SET(nom_c = :nom_c)";
        $res = $bdd->prepare($req);
        $res->execute($bind);
    }

    // supprimer catégorie
    public function supprForm($id)
    {
        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
            .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);
    }

    public function suppr()
    {
        
    }
}
