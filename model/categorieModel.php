<?php

    function getCategorie(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM categorie");
        $req->execute();
        return $req->fetchAll();
    }