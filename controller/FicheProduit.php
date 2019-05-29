<?php
include "produit.php";
require "model/ficheProduitModel.php";

class ficheProduit extends produit
{
    use Genos;

    public function __construct(){
        parent::__construct();
        $this->id = (int)$_GET['id'];
    }

    public function getFiche(){      //Substitut de la méthode Load() de genos -> j'arrive pas à la faire marcher
        $id = $this->id;
        $req = getFicheProduit($id);
        return $req;
    }

    public function addPanier(){
        $p = new produit();
        $quantite = $_POST['quantite'];
        $id_p = $this->id;
        $id_u = $_SESSION['id'];
        $p->Sql(addProduct($quantite, $id_p, $id_u));
        header("Location:$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        exit;
    }
}

if($page == 'ficheProduit' && isset($_GET['id'])){
    $p     = new ficheProduit();
    $fiche = $p->getFiche();
    $libelle = $fiche['libelle_p'];
    $desc    = $fiche['description_p'];
    $prix    = $fiche['prix_p'];
    $img     = $fiche['img_p'];
    $modif = "";

    if($_SESSION['lvl'] > 1){
        $modif = '<a href="'.BASE_URL.'/Gestion/produit"><button class="btn-accueil2 float-right mt-2"><i class="fa fa-edit"></i> Modifier la fiche produit</button></a>';
    }

    if(isset($_POST['addPanier'])){
        $p->addPanier();
    }

    require "view/ficheProduitView.php";
}
