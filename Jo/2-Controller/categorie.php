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
                header("location:".URL_HOME."/index.php?p=categorie&action=2");
            }
        }
        if ($_GET['action'] == 3 && isset($_GET['cas']))
        {
            $cat->suppr($_GET['cas']);
            header("location:".URL_HOME."/index.php?p=categorie&action=3");
        }
    }
}
?>

<div>
    <h3>Différente action possible que voulez vous faire ?</h3>
        <a href="<?=URL_HOME ?>index.php?p=categorie&action=1"><button>Créer</button></a>
        <a href="<?=URL_HOME ?>index.php?p=categorie&action=2"><button>Modifier</button></a>
        <a href="<?=URL_HOME ?>index.php?p=categorie&action=3"><button>Supprimer</button></a>
</div>
