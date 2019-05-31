<?php


$p = new panier();
$p->id_u = (int)$_GET['id'];
$ligne = $p->getPanier();
$total = $p->getTotalPanier();

Head("Panier");
require "4-View/panierView.php";