<div class="container-fluid">
    <div class="row">
           <?php menu();?>
            <div class="col-10">
                <section class="front-accueil active">
                    <div class="col-12">
                        <h1>Clients</h1>
                        <hr>
<!--                        <div class="col-8">-->
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Panier</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; while($i < 10) {?> <!--- Test d'affichage --->
                                    <tr>
                                        <td>Chaks</td>
                                        <td>Franck</td>
                                        <td>chaks.franck@gmail.com</td>
                                        <td><a href="#">Voir</a></td>
                                        <td><span class="badge badge-pill badge-info">Modifier</span>  <span class="badge badge-pill badge-danger">Supprimer</span></td>
                                    </tr>
                                <?php $i++; } ?>
                                </tbody>
                            </table>
<!--                        </div>-->
                    </div>
                </section>
            </div>
    </div>
</div>

