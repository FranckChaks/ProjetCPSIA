<?php
if (!session_id()) session_start();

define ("PARAM_hote","localhost");
define("PARAM_port", 3306);
define("PARAM_nom_bdd", "projetcpsia");
define("PARAM_utilisateur", "root");
define("PARAM_mdp", "");

$URL_HOME = "http://localhost/efficom/TP_POO/jo/";
define("URL_HOME", $URL_HOME);

include(__DIR__."/../3-Model/bdd.php");
include (__DIR__."/code-affichage.php");
include (__DIR__."/../1-Class/connexion.class.php");
include (__DIR__."/../1-Class/produit.class.php");


$c = new connexion();
//$c->verifConnexion();
