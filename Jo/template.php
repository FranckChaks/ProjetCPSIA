<html>
    <?php Head("Accueil");?>
    <body>
    <header>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=categorie">Catégorie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=produit">Produit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Autre</a>
            </li>
            <li>
                <a href="index.php?action=deconnexion"><button style="text-align: center" class="badge btn-danger">Déconnexion</button></a>
            </li>
        </ul>
    </header>
<?php echo $content;?>
    <footer style="text-align: center; padding-top: 90px; color: black">
        <p><b>Copyright 2019 - Projet FranckJo</b></p>
    </footer>
    <?php js();?>
    </body>

</html>
