<?php

if (isset($_GET["action"]) && $_GET["action"] == 1)
{
    $p = new produit;

    $p->nom = $_POST["nom"];
    $p->prenom = $_POST["prenom"];
    $p->age = $_POST["age"];

    $p->ajouter();
    header("location: index.php");
}
if (isset($_GET["action"]) && $_GET["action"] == 2)
{
    $e = new produit;
    $e->id = $_GET['id'];
    $e->charger($e->id);

    $e->nom = $_POST["nom"];
    $e->prenom = $_POST["prenom"];
    $e->age = $_POST["age"];

    $e->modifier();
    header("location: index.php");
}
if (isset($_GET["action"]) && $_GET["action"] == 3)
{
    $e = new eleve();
    $e->id = $_GET['id'];
    if ($_POST['submit'] == 1) {
        $e->charger($e->id);
        $e->supprimer();
    }
    if ($_POST['submit'] == 2)
        header("location: index.php");
}
?>
<!doctype html>
<html lang="fr">
    <?php Head("Accueil"); ?>
  <body>
    <section class="container">
        <h1>Gestion des Produits <small> All </small></h1>
        <div class="col-sm-4">

        </div>
        <hr>

        <?php
            produit::datagrid();
        ?>
        <div class="col">
            <a href="form.php?action=1" class="btn btn-primary">Ajouter un produit</a><br><br>
        </div>
    </section>

