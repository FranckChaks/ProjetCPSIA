<?php
/**
 * Created by PhpStorm.
 * User: vrqf4358
 * Date: 31/05/2019
 * Time: 11:53
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

    public static function getCategories(){
       global $bdd;
       $req = $bdd->prepare("SELECT * FROM categorie");
       $req->execute();
       return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function charger(){
        global $bdd;
        $req = $bdd->query("SELECT * FROM categorie WHERE id_c = ".$this->id_c);
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $this->nom_c      = $ligne['nom_c'];
    }

}