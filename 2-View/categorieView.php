<div class="container-fluid">
    <div class="row">
        <?php menu();?>
        <div class="col-10">
            <h1 style="color: white" class="mt-2">Gestion des catégories</h1>
            <section class="front-accueil active">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="text" name="libelle_c" placeholder="Ajouter une nouvelle catégorie...">
                        <input type="submit" name="addCategorie">
                    </form>

                    <button class="btn btn-primary float-right btn-categorie mb-1"><i class="fa fa-plus"></i> Ajouter une categorie</button>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Libellé</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($liste_categorie as $k=>$v){  //On peut remplacer $liste_categorie par categorie::getListe()?>
                            <tr>
                                <td><?=$v['libelle_c'];?></td>
                                <td><span class="badge badge-pill badge-info">Modifier</span>  <span class="badge badge-pill badge-danger">Supprimer</span></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
