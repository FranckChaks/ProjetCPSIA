<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 03/06/2019
 * Time: 15:00
 */

class commande
{
    public $id_comm;
    public $id_u;
    public $date_c;

    public function __construct()
    {
        $this->id_comm = 0;
        $this->id_u = 0;
        $this->date_c = 0;
    }

    public function getCommande($id)
    {
        global $bdd;

        $req = "SELECT * FROM commande c INNER JOIN associer a ON c.id_comm = a.id_comm WHERE c.id_u = :id GROUP BY c.id_comm ORDER BY date_c";

        $bind = array();
        $bind['id'] = $id;

        $res = $bdd->prepare($req);
        $res->execute($bind);

        return $res;
    }
    // requete SQL pour avoir le contenu du panier de LA commande choisi
    // SELECT * FROM panier p INNER JOIN associer a ON p.id_p = a.id_panier WHERE a.id_comm = :id_comm;

    // requete SQL pour obtenir les infos des produits se trouvant dans le panier de la commande
    // SELECT * FROM produit WHERE id_p IN (SELECT p.id_prd FROM panier p INNER JOIN associer a ON p.id_p = a.id_panier WHERE a.id_comm = :id);

    public function getDernierPanier($id)
    {
        global $bdd;

        $req2 = "SELECT * FROM produit WHERE id_p IN (SELECT p.id_prd FROM panier p INNER JOIN associer a ON p.id_p = a.id_panier WHERE a.id_comm = :id)";

        $bind = array();
        $bind['id'] = $id;

        $res = $bdd->prepare($req2);
        $res->execute($bind);

        $info = $res->fetchAll(PDO::FETCH_ASSOC);
        return $info;
    }
}
