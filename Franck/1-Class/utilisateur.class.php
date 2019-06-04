<?php
/**
 * Created by PhpStorm.
 * User: vrqf4358
 * Date: 31/05/2019
 * Time: 15:17
 */

class utilisateur
{
    public function __construct()
    {
        $this->id_u = 0;
        $this->login = "";
        $this->mdp = "";
        $this->nom = "";
        $this->prenom = "";
        $this->ville = "";
        $this->rue = "";
        $this->numero = "";
        $this->tel = "";
        $this->email = "";
        $this->lvl = 1;
        $this->selected = 0;
    }

    public function getUser(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM user WHERE id_u = ".$this->id_u);
        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);

        $this->id_u = $ligne['id_u'];
        $this->nom = $ligne['nom'];
        $this->prenom = $ligne['prenom'];
        $this->ville = $ligne['ville'];
        $this->rue = $ligne['rue'];
        $this->numero = $ligne['numero'];
        $this->tel = $ligne['tel'];
        $this->email = $ligne['email'];
        $this->login = $ligne['login'];
        $this->mdp = $ligne['mdp'];
        $this->lvl = $ligne['lvl'];
        $this->selected = $ligne['selected'];

        return $this;
    }

    public function getSelectedUser(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM user WHERE selected = 1");
        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);

        $this->id_u = $ligne['id_u'];
        $this->nom = $ligne['nom'];
        $this->prenom = $ligne['prenom'];
        $this->ville = $ligne['ville'];
        $this->rue = $ligne['rue'];
        $this->numero = $ligne['numero'];
        $this->tel = $ligne['tel'];
        $this->email = $ligne['email'];
        $this->lvl = $ligne['lvl'];
        $this->selected = $ligne['selected'];

        return $this;
    }

    public function GetNomPrenom(){
        $u = new utilisateur;
        $u->getSelectedUser();
        $nom_prenom = $u->prenom." ".$u->nom;
        return $nom_prenom;
    }

    public function getIDSelectedUser(){
        $u = new utilisateur;
        $u->getSelectedUser();
        $id_user = $u->id_u;
        return $id_user;
    }

    public static function getOtherUsers(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM user WHERE selected = 0 AND lvl < 2 ORDER BY nom");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateSelected(){
        global $bdd;

        $first_req = $bdd->prepare("UPDATE user SET selected = 0 WHERE selected = 1");
        $first_req->execute();
        $first_req->fetch(PDO::FETCH_ASSOC);

        $req = $bdd->prepare("UPDATE user SET selected = 1 WHERE id_u = ".$this->id_u);
        $req->bindValue('id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllUser(){
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM user WHERE lvl < 2 ORDER BY nom, prenom");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouter(){
        global $bdd;
        $req = $bdd->prepare("INSERT INTO user (login, mdp, nom, prenom, ville, rue, numero, tel, email) VALUES (:login, :mdp, :nom, :prenom, :ville, :rue, :numero, :tel, :email)");
        $req->bindValue(':login', $this->login, PDO::PARAM_STR);
        $req->bindValue(':mdp', $this->mdp, PDO::PARAM_STR);
        $req->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $req->bindValue(':prenom', $this->prenom, PDO::PARAM_STR);
        $req->bindValue(':ville', $this->ville, PDO::PARAM_STR);
        $req->bindValue(':rue', $this->rue, PDO::PARAM_STR);
        $req->bindValue(':numero', $this->numero, PDO::PARAM_STR);
        $req->bindValue(':tel', $this->tel, PDO::PARAM_STR);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function modifier(){
        global $bdd;
        $req = $bdd->prepare("UPDATE user set login = :login, mdp = :mdp, nom = :nom, prenom = :prenom, ville = :ville, rue = :rue, numero = :numero, tel = :tel, email = :email WHERE id_u = ".$this->id_u);
        $req->bindValue(':login', $this->login, PDO::PARAM_STR);
        $req->bindValue(':mdp', $this->mdp, PDO::PARAM_STR);
        $req->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $req->bindValue(':prenom', $this->prenom, PDO::PARAM_STR);
        $req->bindValue(':ville', $this->ville, PDO::PARAM_STR);
        $req->bindValue(':rue', $this->rue, PDO::PARAM_STR);
        $req->bindValue(':numero', $this->numero, PDO::PARAM_STR);
        $req->bindValue(':tel', $this->tel, PDO::PARAM_STR);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function supprimer(){
        global $bdd;
        $req = $bdd->prepare("DELETE FROM user WHERE id_u = :id_u");
        $req->bindValue(':id_u', $this->id_u, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

}