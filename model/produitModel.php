<?php

    function getProducts(){
        $req = "SELECT * FROM produit";
        return $req;
    }

    function getProductByCat($id_c){
        $req = "SELECT * FROM produit WHERE id_c = ".$id_c;
        return $req;
    }