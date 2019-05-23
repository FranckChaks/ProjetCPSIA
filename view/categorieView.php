<div class="container-fluid">
    <div class="row">
        <?php menu();?>
        <div class="col-10">
            <h1 style="color: white" class="mt-2">Gestion des catégories</h1>
            <section class="front-accueil active">
                <div class="col-12">
                    <button class="btn btn-primary float-right btn-categorie mb-1"><i class="fa fa-plus"></i> Ajouter une categorie</button>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Libellé</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; while($i < 10) {?> <!--- Test d'affichage --->
                            <tr>
                                <td>Alimentaires</td>
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

