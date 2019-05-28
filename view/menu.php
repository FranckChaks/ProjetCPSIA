<?php
    function menu(){ ?>
        <div class="sidebar">
            <a href="accueil"><b>Logo</b></a>
            <a class="active mnu-onglet" href="<?=BASE_URL;?>/accueil">Accueil</a>
            <a href="<?=BASE_URL;?>/produit" class="mnu-onglet">Produit</a>
            <a href="<?=BASE_URL;?>/user" class="mnu-onglet">Gestion utilisateur</a>
            <a href="<?=BASE_URL;?>/categorie" class="mnu-onglet">Gestion catégorie</a>
        </div>

    <?php }
