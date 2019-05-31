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
        $req = $bdd->prepare("SELECT * FROM user WHERE id_u = ".$this->id);
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
        $req = $bdd->prepare("SELECT * FROM user WHERE selected = 0 ORDER BY nom");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}