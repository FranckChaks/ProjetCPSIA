<?php

require "model/produitModel.php";
include('categorie.php');

class produit
{
    use Genos;
    public $primary_key;
    public $id;
    public $libelle_p;
    public $description_p;
    public $prix_p;
    public $img_p;
    public $taille_p;
    public $id_c;

    public function __construct()
    {
        $this->primary_key = "id_p" ;
        $this->id = 0;
        $this->libelle_p = "";
        $this->description_p = "";
        $this->prix_p = 0;
        $this->img_p = "";
        $this->taille_p = null;
        $this->id_c = 1;
    }

    public static function getAllProduct(){
        $p            = new produit();
        $req          = getProducts();
        $champs       = $p->FieldList();
        $listeProduit = $p->StructList($req, $champs);
        return $listeProduit;
    }

    public function getProductByCategory($id_c){
        $p            = new produit();
        $req          = getProductByCat($id_c); // ref Model
        $champs       = $p->FieldList();
        $listeProduit = $p->StructList($req, $champs);
        return $listeProduit;
    }
}

$p = new produit();
foreach(categorie::getList() as $k=>$v){
    $listeProduitCat[] = $p->getProductByCategory($v['id_c']);
}


if(!isset($_GET['id'])) {
    include "view/produitView.php";
}
