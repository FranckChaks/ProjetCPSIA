<?php


$p = new panier();
$p->id_u = (int)$_GET['id'];
$ligne = $p->getPanier();
$total = $p->getTotalPanier();

$u = new utilisateur();
$user = $u->getNomPrenom();
$id_user_selected = $u->getIDSelectedUser();


if(isset($_GET['action']) && $_GET['action'] == 3){
    $p = new panier();
    $p->id_u = (int)$_GET['id1'];
    $p->id_p = (int)$_GET['id2'];
    $p->suppFromPanier();
    header("location:".URL_HOME."/panier/".$p->id_u);
}

Head("Panier");
require "4-View/panierView.php";