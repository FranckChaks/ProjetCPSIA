<?php

require "model/panierModel.php";

class panier
{
    use Genos;
    public $primary_key;
    public $id;
    public $quantite;
    public $id_p;
    public $id_u;

    public function __construct(){
        $this->primary_key = "id_pa" ;
        $this->id = 0;
        $this->quantite = "";
        $this->id_p = 0;
        $this->id_u = 0;
    }

    public static function getProductPanier($id_u){
        $p = new panier();
        $p->id = $id_u;
        $req = getPanier($id_u);
        return $req;
    }

    public function deleteProduct(){
        $id = $_GET['id'];
        $req = delete($id);
        header("Location:panier");
        exit;
    }
}

$p = new panier;
$id_u = $_SESSION['id'];
$panier = panier::getProductPanier($id_u);
$total = 0;

foreach ($panier as $key => $val){
    $total += $val['quantite'] * $val['prix_p'];
}

if(isset($_GET['delete'])){ //TODO: Message de vérification de suppression
    $p->deleteProduct();
}




require "view/panierView.php";
