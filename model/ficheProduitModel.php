<?php

    function getFicheProduit($id_p){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM produit WHERE id_p = ".$id_p);
        $req->bindValue('id_p', $id_p, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch();
    }

    function addProduct($quantite, $id_p, $id_u){
        $req = "INSERT INTO panier(quantite, id_p, id_u) VALUES (".$quantite.", ".$id_p.", ".$id_u.")";
        return $req;
    }
