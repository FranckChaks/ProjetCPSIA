<?php
if (!session_id()) session_start();

define ("PARAM_hote","localhost");
define("PARAM_port", 3306);
define("PARAM_nom_bdd", "projetcpsia");
define("PARAM_utilisateur", "root");
define("PARAM_mdp", "");

$URL_HOME = "http://localhost/efficom/TP_POO/projetCPSIA/";
define("URL_HOME", $URL_HOME);


include (__DIR__."/../1-Class/connexion.class.php");

$c = new connexion();
//$c->verifConnexion();
