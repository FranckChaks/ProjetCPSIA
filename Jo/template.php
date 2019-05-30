<html>
    <?php Head("Accueil");?>
    <body>
    <header>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
