<?php
include "produit.php";
require "model/ficheProduitModel.php";

class ficheProduit extends produit
{
    use Genos;

    public function __construct(){
        parent::__construct();
    }

    public function getFiche($id){      //Substitut de la méthode Load() de genos -> j'arrive pas à la faire marcher
        $p = new produit;
        $p->id = $id;
        $req = getFicheProduit($id);
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        return $ligne;
    }
}


$p     = new ficheProduit();
$id = (int)$_GET['id'];
$fiche = $p->getFiche($id);

$libelle = $fiche['libelle_p'];
$desc = $fiche['description_p'];
$prix = $fiche['prix_p'];
$img = $fiche['img_p'];

require "view/ficheProduitView.php";
