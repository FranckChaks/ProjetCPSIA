<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 02/06/2019
 * Time: 17:11
 */

if (isset($_GET['action']))
{
    $cat = new categorie();
    if ($_GET['action'] == 1)
    {
        $cat->createForm();
        $cat->create();
    }
    if ($_GET['action'] == 2)
    {
        $cat->select();
        //$cat->modifForm();
        //$cat->modif();
    }
    if ($_GET['action'] == 3)

        $cat->select();
        $cat->supprForm();
    }
        
}
?>

<div>
    <h3>Différente action possible que voulez vous faire ?</h3>
        <a href="<?=URL_HOME ?>index.php?p=categorie&action=1"><button>Créer</button></a>
        <a href="<?=URL_HOME ?>index.php?p=categorie&action=2"><button>Modifier</button></a>
        <a href="<?=URL_HOME ?>index.php?p=categorie&action=3"><button>Supprimer</button></a>
</div>
