<?php

class panier
{
    public $quantite;
    public $id_p;
    public $id_u;

    public function  __construct()
    {
        $this->quantite = 0;
        $this->id_p = 0;
        $this->id_u = 0;
    }

    public function ajouter(){
        global $bdd;
        $req = $bdd->prepare("INSERT INTO panier(quantite, id_p, id_u) VALUES (:quantite, :id_p, :id_u)");
        $req->bindValue(':quantite', $this->quantite, PDO::PARAM_INT);
        $req->bindValue(':id_p', $this->id_p, PDO::PARAM_INT);
        $req->bindValue(':id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getPanier(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM panier pa 
                                        INNER JOIN produit p ON pa.id_p = p.id_p
                                        INNER JOIN user u ON u.id_u = pa.id_u 
                                        AND pa.id_u =".$this->id_u);
        $req->bindValue('id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalPanier(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM panier pa 
                                        INNER JOIN produit p ON pa.id_p = p.id_p
                                        INNER JOIN user u ON u.id_u = pa.id_u 
                                        AND pa.id_u =".$this->id_u);
        $req->bindValue('id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        $ligne = $req->fetchAll(PDO::FETCH_ASSOC);
        $total = 0;
        foreach ($ligne as $key=>$val){
            $total += $val['quantite']*$val['prix_p'];
        }
        return $total;
    }

    public function suppFromPanier(){
        global $bdd;
        $req = $bdd->prepare("DELETE FROM panier WHERE id_p = :id_p AND id_u = :id_u");
        $req->bindValue(':id_p', $this->id_p, PDO::PARAM_INT);
        $req->bindValue(':id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}