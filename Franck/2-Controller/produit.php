<?php


    if (isset($_POST["add"]))       //Ajout au panier
    {
        $pa = new panier;
        $pa->id_p = $_POST["add"];
        $pa->id_u = $_POST["id_u"];
        $pa->quantite = $_POST['quantite'];
        $pa->ajouter();

        header("refresh:0");
        exit;
    }

    if (isset($_GET["action"]) && $_GET["action"] == 2)     //Modifier
    {
        $p = new produit;
        $p->id_p = (int)$_GET['id'];
        $p->charger();
        $img_p = $p->img_p;
        $nom_p = $p->libelle_p;
        $prix_p = $p->prix_p;

        if(isset($_POST['submit'])){
            $p->libelle_p = $_POST['libelle_p'];
            $p->prix_p = $_POST['prix_p'];

            if(!empty($_POST['img_p'])) $p->img_p = $_POST['img_p'];
            else $p->img_p = $img_p;

            $id_c = $p->id_c;

            $p->Modifier();
        }
    }
    if (isset($_GET["action"]) && $_GET["action"] == 3)     //Supprimer
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

    if(isset($_GET['id'])){                     //Affichage des produits selon la categorie
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

$u = new utilisateur();
$user = $u->getNomPrenom();
$id_user_selected = $u->getIDSelectedUser();

//$alluser = $u->getOtherUsers();

Head("Produit");
require "4-View/produitView.php";
