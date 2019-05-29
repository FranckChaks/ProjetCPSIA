<?php

    function getPanier($id_u){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM panier pa INNER JOIN produit p 
                ON p.id_p = pa.id_p 
                INNER JOIN user u 
                ON u.id_u = pa.id_u 
                AND u.id_u = ".$id_u);

        $req->bindValue('id_u', $id_u, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll();
    }

    function delete($id_p){
        global $bdd;
        $req = $bdd->prepare("DELETE FROM panier WHERE id_p = ".$id_p." AND id_u = ".$_SESSION['id']);
        $req->bindValue('id_p', $id_p, PDO::PARAM_INT);
        $req->execute();
        return $req;
    }
