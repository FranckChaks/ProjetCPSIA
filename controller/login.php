<?php
require "model/loginModel.php";

class login
{
    public $nom;
    public $pageConnexion;

    public function __construct(){
        $this->Deconnexion();
        $this->nom = "auth";
        $this->pageConnexion = "loginView.php";
    }

    public function GetPage(){
        $page = $_SERVER['PHP_SELF'];
        $page = explode('/', $page);
        $page = array_reverse($page);
        return $page[0];
    }
    public function verifConnexion(){
        if(!isset($_SESSION[$this->nom]) || $_SESSION[$this->nom] !== true){
            $page = $this->GetPage();
            if($page != $this->pageConnexion) header("Location: ".BASE_URL.$this->pageConnexion);
        }
    }
    public function Connexion(){
        $login = $_POST['login'];
        $mdp = sha1($_POST['mdp']);

        $req = login($login, $mdp);
        if($reponse = $req->fetch())
        {
            $_SESSION['connecte'] = true;
            $_SESSION['id'] = $reponse['id_u'];
            $_SESSION['login'] = $reponse['login'];
            $_SESSION['lvl'] = $reponse['lvl'];

            header("location:".BASE_URL."/accueil");
        }
    }
    public function Deconnexion(){
        if(isset($_GET['action']) && $_GET['action'] == "deconnexion"){
            foreach($_SESSION as $key=>$val){
                unset($_SESSION[$key]);
            }

            header("location: index.php");
        }
    }
}

require "view/loginView.php";