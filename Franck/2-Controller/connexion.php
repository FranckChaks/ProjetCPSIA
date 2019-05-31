<?php include("../0-config/config.php");
if (isset($_GET['action']) && $_GET['action'] == "connexion")
{
    $c = new connexion();
    $c->connexion();
}

Head("Connexion");
require "../4-View/connexionView.php";

