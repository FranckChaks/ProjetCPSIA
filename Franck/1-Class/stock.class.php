<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 03/06/2019
 * Time: 11:50
 */

class stock
{
    public $id_p;
    public $quantite;

    public function __construct(){
        $this->id_p = 0;
        $this->quantite = 0;
    }

    public function getStock($id){

        global $bdd;
        $req = $bdd->prepare("SELECT * FROM stock WHERE id_p = :id_p");
        $req->bindValue('id_p', $id, PDO::PARAM_INT);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $this->id_p = $ligne['id_p'];
        $this->quantite = $ligne['quantite'];

        return $this;
    }

    public function updateStock($id){
        $s = new stock;
        $s->id_p = $id;
        $s->getStock($s->id_p);
        $s->quantite -= (int)$_POST['quantite'];

        global $bdd;
        $req = $bdd->prepare("UPDATE stock SET quantite = :quantite WHERE id_p = :id_p");
        $req->bindValue(':quantite', $s->quantite, PDO::PARAM_INT);
        $req->bindValue(':id_p', $s->id_p, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function ajouter(){
        global $bdd;
        $req = $bdd->prepare("INSERT INTO stock(quantite, id_p) VALUES (:quantite, :id_p)");
        $req->bindValue(':id_p', $this->id_p, PDO::PARAM_INT);
        $req->bindValue(':quantite', $this->quantite, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}