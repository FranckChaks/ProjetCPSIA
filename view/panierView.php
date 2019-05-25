<div class="container-fluid">
    <div class="row">
        <?php menu();?>
        <div class="col-10">
            <div class="front-produit" style="text-align: left">
                <h1>Mon Panier</h1>
                <hr>
                <div class="row">
                    <?php $i = 0; while($i <5){ ?>
                    <div class="col-1">
                        <img src="<?=BASE_URL;?>/assets/css/wallpaper.jpg" height="60" width="60">
                    </div>
                    <div class="col-11">
                       <h4>Ananas <small>1000€</small></h4>
                        <b>Quantité: 5</b><br>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquam corporis cum dolorem dolorum earum, error fuga harum hic inventore ipsam obcaecati odio, sapiente similique tempora tempore ut veritatis voluptate.</small>
                        <hr>
                    </div>

                    <?php $i++; } ?>
                    <div class="col-12">
                        <div class="float-right">
                            <h3><b>Total: <small> 25 000€</small></h3>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>