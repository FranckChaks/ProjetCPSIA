<?php //include("../0-config/config.php");
if (isset($_GET['action']) && $_GET['action'] == "connexion")
{
    $c = new connexion();
    $c->connexion();

}

if (isset($_GET['action']) && $_GET['action'] == "deconnexion")
{
    $c = new connexion();
    $c->deconnexion();
    header("location:".URL_HOME."/connexion");
}

Head("Connexion");
require "4-View/connexionView.php";

