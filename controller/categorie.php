<?php
require "model/categorieModel.php";

class categorie
{
    use genos;

    public $id_c;
    public $libelle_c;

    public function __construct(){
        $this->id_c = 0;
        $this->libelle_c= "";
    }
}

require "view/categorieView.php";