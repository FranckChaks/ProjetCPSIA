<?php if(isset($_SESSION['connecte']) && $_SESSION['connecte'] == true) { ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding: 0">
            <header>
                <nav>
                    <ul>
                        <li><a href="<?=URL_HOME;?>/accueil" class="font-text">Accueil</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font-text" href="#" id="navbarDropdown" data-toggle="dropdown">
                                Produit
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach(categorie::getCategories() as $k=>$v){ ?>
                                <a class="dropdown-item" href="<?=URL_HOME;?>/produit/<?=$v['id_c'];?>"><?=$v['nom_c'];?></a>
<!--                                <div class="dropdown-divider"></div>-->
                                <?php } ?>
                            </div>
                        </li>
                        <li><img src="<?=URL_HOME;?>/css/logo.png" height="90" width="90"> </li>
                        <li><a href="<?=URL_HOME;?>/utilisateur" class="font-text">Client</a></li>
                        <li><a href="<?=URL_HOME;?>/categorie" class="font-text">Catégorie</a></li>
                        <li><a href="<?=URL_HOME;?>/connexion?action=deconnexion" class="font-text" style="color: red"><small>Déconnexion</small> </a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>

</div>
<?php }
echo $content;?>
<?php js();?>
</body>
</html>
