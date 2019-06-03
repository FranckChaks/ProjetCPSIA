<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 02/06/2019
 * Time: 17:11
 */
Head("Categorie");
if (isset($_GET['action']))
{
    $cat = new categorie();

    if ($_GET['action'] == 1)
    {
        $cat->createForm();
        if  (isset($_POST['submit']))
            $cat->create();
    }
    if ($_GET['action'] >= 2)
    {
        $cat->select();
        if ($_GET['action'] == 2 && isset($_GET['cas']))
        {
            $cat->modifForm($_GET['cas']);
            if (isset($_POST['submit'])) {
                $cat->modif();
                header("location:".URL_HOME."/categorie?action=2");
            }
        }
        if ($_GET['action'] == 3 && isset($_GET['cas']))
        {
            $cat->suppr($_GET['cas']);
            header("location:".URL_HOME."/categorie?action=3");
        }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h3>Différente action possible que voulez vous faire ?</h3>
                <a href="<?=URL_HOME?>/categorie?action=1"><button class="btn btn-success">Créer</button></a>
                <a href="<?=URL_HOME?>/categorie?action=2"><button class="btn btn-warning">Modifier</button></a>
                <a href="<?=URL_HOME?>/categorie?action=3"><button class="btn btn-danger">Supprimer</button></a>
        </div>
    </div>
</div>
