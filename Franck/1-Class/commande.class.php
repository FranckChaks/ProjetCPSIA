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

        $req2 = "SELECT * FROM produit where id_p in (SELECT p.id_p from panier p inner join associer a on a.id_panier = p.id_pa where a.id_comm = :id)";

        $bind = array();
        $bind['id'] = $id;

        $res = $bdd->prepare($req2);
        $res->execute($bind);

        $info = $res->fetchAll(PDO::FETCH_ASSOC);
        return $info;
    }

    public function ajouter(){
        global $bdd;
        $req = $bdd->prepare("INSERT INTO commande(id_u, date_c) VALUE (:id_u, NOW())");
        $req->bindValue('id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        $req->fetch(PDO::FETCH_ASSOC);

        $id_u = $this->id_u;
        $id_c = $bdd->lastInsertId();

        $p = new panier();
        $p->id_u = $id_u;
        $panier = $p->getPanier();

        foreach($panier as $k=>$v){
            $req1 = $bdd->prepare("INSERT INTO associer(id_panier, id_comm) VALUE (:id_panier, :id_comm)");
            $req1->bindValue(':id_panier', $v['id_pa'], PDO::PARAM_INT);
            $req1->bindValue(':id_comm', $id_c, PDO::PARAM_INT);
            $req1->execute();
            $req1->fetch(PDO::FETCH_ASSOC);

//            $p->id_pa = $v['id_pa'];
//            $p->supprPanier();
        }
//        header("location:".URL_HOME."/commande/".$id_u);
    }
}
