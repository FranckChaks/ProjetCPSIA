xw<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 25/05/2019
 * Time: 11:54
 */

class produit
{
    public $id;
    public $nom;
    public $desc;
    public $prix;
    public $img;

    public function __construct()
    {
        $this->id = 0;
        $this->nom = "";
        $this->desc = "";
        $this->prix = 0;
        $this->img = "";
    }

    public function getProduit()
    {
        
    }

}
