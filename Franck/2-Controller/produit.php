<?php

    $u = new utilisateur();
    $user = $u->getNomPrenom();
    $id_user_selected = $u->getIDSelectedUser();

    $p = new panier();
    $p->id_u = $id_user_selected;
    $total = $p->getTotalPanier();

    if (isset($_POST["add"]))       //Ajout au panier
    {
        $pa = new panier;
        $pa->id_p = $_POST["add"];
        $pa->id_u = $id_user_selected;
        $pa->quantite = (int)$_POST['quantite'];

        //TODO : Mettre stock a la place de quantite sinon ça n'en ajoute qu'un comme $i est réintialisé à chaque produit

        $pa->ajouter();

        header("refresh:0");
        exit;
    }

    if(isset($_GET['changeUser'])){
        $u->id_u = (int)$_POST['id_u'];
        $u->updateSelected();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    if(isset($_GET['action']) && $_GET['action'] == 1){
        $p = new produit;
        $liste_p = $p->getProduit();
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
        $p = new produit();
        $p->id_p = $_GET['id'];
        $p->supprimer();
        header("location:".URL_HOME."/produit?action=1");
        exit;
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

    if(isset($_POST['addProduct'])){
        $p = new produit;
        $p->libelle_p = $_POST['libelle_p'];
        $p->description_p = $_POST['description_p'];
        $p->prix_p = $_POST['prix_p'];
        $p->id_c = $_POST['id_c'];


        if(isset($_FILES['img_p']))
        {
            $dossier = 'css/';
            $fichier = basename($_FILES['img_p']['name']);
            if(move_uploaded_file($_FILES['img_p']['tmp_name'], $dossier . $fichier))
            {
                $p->img_p = $fichier;
                $p->ajouter();
                header("refresh:0");
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">
                          Image non chargée.
                      </div>';
            }
        }


    }


Head("Produit");
require "4-View/produitView.php";
