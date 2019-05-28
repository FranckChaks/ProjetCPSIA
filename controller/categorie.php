<?php
require "model/categorieModel.php";

class categorie
{
    use Genos;

    public $id;
    public $libelle_c;

    public function __construct(){
        $this->id      = 0;
        $this->libelle_c = "";
    }

    public static function getList(){
        $c        = new categorie;
        $req      = getCategorie();        //Voir categorieModel
        $champs   = $c->FieldList();
        $listeCat = $c->StructList($req, $champs);
        return $listeCat;
    }

    public static function addCategorie(){
        $c = new categorie;
        $c->LoadForm();
        $c->Add();
        header("location:categorie");
    }
}

$c = new categorie();
$liste_categorie = $c->getList();
if(isset($_POST['addCategorie'])){
    $c->addCategorie();
}


//require "view/categorieView.php";
