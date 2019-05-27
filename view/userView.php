<?php menu();?>
<div class="content">
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
                    <th>Adresse</th>
                    <th>Panier</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach(user::getListUser() as $k=>$v) {?> <!--- Test d'affichage --->
                    <tr>
                        <td><?=$v['nom'];?></td>
                        <td><?=$v['prenom'];?></td>
                        <td><?=$v['email'];?></td>
                        <td><?=$v['numero']." ".$v['rue'].", ".$v['ville'];?></td>
                        <td><a href="#">Voir</a></td>
                        <td><span class="badge badge-pill badge-info">Modifier</span>  <span class="badge badge-pill badge-danger">Supprimer</span></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>