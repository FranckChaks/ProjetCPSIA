<?php Head("Accueil");?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding: 0">
            <header>
                <nav>
                    <ul>
                        <li><a href="accueil" class="href">ACCUEIL</a></li>
                        <li><a href="produit" class="href">PRODUIT</a></li>
                        <li><img src="<?=URL_HOME;?>/css/food.png" height="50" width="50"> </li>
                        <li>CLIENT</li>
                        <li>GESTION</li>
                    </ul>
                </nav>
                <span class="float-right mt-2 mr-2" style="color: black">
                    <i class="fa fa-shopping-basket"></i> Panier de
                    <select>
                        <option>John Doe</option>
                        <option>Jane Doe</option>
                    </select>
                    <b>0,00€</b>
                </span>

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
