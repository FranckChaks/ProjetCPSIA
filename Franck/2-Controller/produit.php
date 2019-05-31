<?php
    if (isset($_GET["action"]) && $_GET["action"] == 1)
    {
        $p = new produit;

        $p->nom = $_POST["nom"];
        $p->prenom = $_POST["prenom"];
        $p->age = $_POST["age"];

        $p->ajouter();
        header("location: index.php");
    }
    if (isset($_GET["action"]) && $_GET["action"] == 2)
    {
        $p = new produit;
        $p->id_p = (int)$_GET['id'];
        $p->charger();

//        $p->nom = $_POST["nom"];
//        $p->prenom = $_POST["prenom"];
//        $p->age = $_POST["age"];

//        $p->modifier();
//        header("location: index.php");
    }
    if (isset($_GET["action"]) && $_GET["action"] == 3)
    {
        $e = new eleve();
        $e->id = $_GET['id'];
        if ($_POST['submit'] == 1) {
        $e->charger($e->id);
        $e->supprimer();
    }
    if ($_POST['submit'] == 2)
        header("location: index.php");
    }

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $p = new produit;
        $produit = $p->getProduitByCategory($id);

        $c = new categorie;
        $c->id_c = $id;
        $c->charger();
        $nom_c = $c->nom_c;
    }

//$c = new categorie();
//$c->getCategories();

Head("Produit");
require "4-View/produitView.php";
