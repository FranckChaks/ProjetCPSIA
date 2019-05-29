<?php

class connexion
{
    public $id;
    public $nom;
    public $login;
    public $mdp;
    public $lvl;
    public $pageConnexion;

    public function __construct()
    {
        $this->deconnexion();
        $this->id = 0;
        $this->nom = "";
        $this->login = "";
        $this->mdp = "";
        $this->lvl = 0;
        $this->pageConnexion = "./2-View/loginView.php";
    }

    public function verifConnexion()
    {
        if (!isset($_SESSION[$this->nom]) || $_SESSION[$this->nom] != true)
        {
            $page = $this->get_page();
            if ($page != $this->pageConnexion)
                header("location:" .URL_HOME.$this->pageConnexion);
        }

    }

    public function get_page()
    {
        $page = $_SERVER['PHP_SELF'];
        $page = explode("/", $page);
        $page = array_reverse($page);

        return $page[0];
    }

    public function connexion(){
        $login = $_POST['login'];
        $mdp = md5($_POST['mdp']);

        $bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname=".PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

        $req = "SELECT * FROM user WHERE login = :login AND mdp = :mdp";

        $bind = array();
        $bind['login'] = $login;
        $bind['mdp'] = $mdp;

        $res = $bdd->prepare($req);
        $res->execute($bind);

        $info = $res->fetch(PDO::FETCH_ASSOC);

        if ($info != false)
        {
            $_SESSION[$this->nom] = true;
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $info['id'];
            var_dump($info);
            //header("location:../index.php");
        }else
            return false;

    }

    public function deconnexion()
    {
        if (isset($_GET['action']) && $_GET['action'] == 'logout')
        {
            foreach($_SESSION as $key => $v)
            {
                unset($_SESSION[$key]);
            }
        }
    }
}
