<?php

class connexion
{
    public $nom;
    public $pageConnexion;

    public function __construct()
    {
        $this->deconnexion();
        $this->nom = "connecte";
        $this->pageConnexion = "2-Controller/connexion.php";
    }

    public function verifConnexion()
    {
        if (!isset($_SESSION[$this->nom]) || $_SESSION[$this->nom] !== true)
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

    public function connexion()
    {

        $login = $_POST['login'];
//        $mdp = md5($_POST['mdp']);
        $mdp = sha1($_POST['mdp']);

        global $bdd;

        $req = "SELECT * FROM user WHERE login = :login AND mdp = :mdp LIMIT 0,1";
        $bind = array();
        $bind['login'] = $login;
        $bind['mdp'] = $mdp;

        $res = $bdd->prepare($req);
        $res->execute($bind);

        $ligne = $res->fetch(PDO::FETCH_ASSOC);

        if ($ligne != false)
        {
            $_SESSION[$this->nom] = true;
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $ligne['id_u'];
            var_dump($_SESSION);
            header("location:../index.php");
        }
    }

    public function deconnexion()
    {
        if (isset($_GET['action']) && $_GET['action'] == 'deconnexion')
        {
            foreach($_SESSION as $key => $v)
            {
                unset($_SESSION[$key]);
            }
        }
    }
}
