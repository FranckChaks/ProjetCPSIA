<?php
    $listUser = utilisateur::getAllUser();

    if(isset($_GET['action']) && $_GET['action'] == 1){
        $u = new utilisateur();

        if(isset($_POST['submit'])){
            $u->nom = $_POST['nom'];
            $u->prenom = $_POST['prenom'];
            $u->ville = $_POST['ville'];
            $u->rue = $_POST['rue'];
            $u->numero = $_POST['numero'];
            $u->tel = $_POST['tel'];
            $u->login = $_POST['login'];
            $u->mdp = sha1($_POST['mdp']);
            $u->email = $_POST['email'];

            $u->ajouter();
            header("location:utilisateur");
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 2){
        $u = new utilisateur();
        $u->id_u = (int)$_GET['id'];
        $u->getUser();

        $nom    = $u->nom;
        $prenom = $u->prenom;
        $ville  = $u->ville;
        $rue    = $u->rue;
        $numero = $u->numero;
        $tel    = $u->tel;
        $login  = $u->login;
        $mdp    = $u->mdp;
        $email  = $u->email;

        if(isset($_POST['submit'])){
            $u->nom = $_POST['nom'];
            $u->prenom = $_POST['prenom'];
            $u->ville = $_POST['ville'];
            $u->rue = $_POST['rue'];
            $u->numero = $_POST['numero'];
            $u->tel = $_POST['tel'];
            $u->login = $_POST['login'];

            if($u->mdp != $_POST['mdp']){
                $u->mdp = sha1($_POST['mdp']);
            }

            $u->email = $_POST['email'];

            $u->modifier();
            header("location:utilisateur");
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 3){
        $u = new utilisateur();
        $u->id_u = (int)$_GET['id'];
        $u->supprimer();
        header("location:".URL_HOME."/utilisateur");
    }

    require "4-View/utilisateurView.php";