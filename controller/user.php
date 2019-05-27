<?php
require "model/userModel.php";
class user
{
    use Genos;

    public $id;
    public $login;
    public $mdp;
    public $nom;
    public $prenom;
    public $ville;
    public $rue;
    public $numero;
    public $tel;
    public $email;
    public $lvl;

    public function __construct(){
        $this->id = 0;
        $this->nom = "";
        $this->prenom = "";
        $this->login = "";
        $this->mdp = "";
        $this->ville = "";
        $this->rue = "";
        $this->numero = "";
        $this->tel = "";
        $this->email = "";
        $this->lvl = 1;
    }

    public static function getListUser(){
        $u = new user();
        $req = getUsers();
        $champs = $u->FieldList();
        $listeUsers = $u->StructList($req, $champs);
        return $listeUsers;
    }
}

$u = new user();





require "view/userView.php";