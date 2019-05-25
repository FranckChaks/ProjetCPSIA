<?php
require "model/ficheProduitModel.php";

class ficheProduit
{
    use genos;


    public $id_p;
    public $libelle_p;
    public $description_p;
    public $prix_p;
    public $img_p;
    public $id_c;

    public function __construct(){
        $this->id_p = 0;
        $this->libelle_p = "";
        $this->description_p = "";
        $this->prix_p = "";
        $this->img_p = "";
        $this->id_c = 0;
    }
}



require "view/ficheProduitView.php";