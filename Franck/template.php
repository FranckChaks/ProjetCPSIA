<?php Head("Accueil");?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding: 0">
            <header>
                <nav>
                    <ul>
                        <li><a href="<?=URL_HOME;?>/accueil">ACCUEIL</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                                PRODUIT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach(categorie::getCategories() as $k=>$v){ ?>
                                <a class="dropdown-item" href="<?=URL_HOME;?>/produit/<?=$v['id_c'];?>"><?=$v['nom_c'];?></a>
<!--                                <div class="dropdown-divider"></div>-->
                                <?php } ?>
                            </div>
                        </li>
                        <li><img src="<?=URL_HOME;?>/css/food.png" height="50" width="50"> </li>
                        <li><a href="<?=URL_HOME;?>/utilisateur">CLIENT</a></li>
                        <li>GESTION</li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>

</div>
<?php echo $content;?>
<footer style="text-align: center; padding-top: 90px; color: black">
<!--    <p><b>Copyright 2019 - Projet FranckJo</b></p>-->
</footer>
<?php js();?>
</body>
</html>
