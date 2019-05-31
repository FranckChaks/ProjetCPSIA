<?php include("0-config/config.php");
//    if(!isset($_GET['action']) || !isset($_GET['user'])) header("location:index.php");
    if(isset($_GET['action']) && $_GET['action'] == 1) $mode = "Ajout";
    if(isset($_GET['action']) && $_GET['action'] == 2) $mode = "Modif";
    if(isset($_GET['action']) && $_GET['action'] == 3) $mode = "Supprimer";

    if(isset($_GET['user']) && $_GET['user'] == 1) $mode = "Ajout";
    if(isset($_GET['user']) && $_GET['user'] == 2) $mode = "Modif";
    if(isset($_GET['user']) && $_GET['user'] == 3) $mode = "Supprimer";
//    if(isset($_GET['action'] == 2)) $mode = "Modif";
//    if(isset($_GET['action'] == 3)) $mode = "Supprimer";
//    if(isset($_GET['user'] == 1)) $mode = "Ajout";
//    if(isset($_GET['user'] == 2)) $mode = "Modif";
//    if(isset($_GET['user'] == 3)) $mode = "Supprimer";
?>

<!doctype html>
    <?php Head("Formulaire Module élève"); ?>
  <body><br>
    <section class="container">
        <?php if(isset($_GET['action'])) { ?><h1>Formulaire Eleve <small>Module</small> <sup><span class="badge badge-pill <?php if($mode == "Ajout") echo "badge-info"; else if($mode == "Modif") echo "badge-warning";   else if($mode == "Supprimer") echo "badge-danger";  ?>"><?=$mode;?></span></sup></h1><?php } ?>
        <?php if(isset($_GET['user'])) { ?><h1>Formulaire Utilisateurs <small>Module</small> <sup><span class="badge badge-pill <?php if($mode == "Ajout") echo "badge-info"; else if($mode == "Modif") echo "badge-warning";   else if($mode == "Supprimer") echo "badge-danger";  ?>"><?=$mode;?></span></sup></h1><?php } ?>
        <hr>
        <div class="col-sm-6">
            <?php if(isset($_GET['action']) && $mode == "Ajout") eleve::FormAjout(); ?>
            <?php if(isset($_GET['action']) && $mode == "Modif") eleve::FormModif(); ?>
            <?php if(isset($_GET['action']) && $mode == "Supprimer") eleve::FormSupp(); ?>
            <?php if(isset($_GET['user']) && $mode == "Ajout") utilisateur::FormAjout(); ?>
            <?php if(isset($_GET['user']) && $mode == "Modif") utilisateur::FormModif(); ?>
            <?php if(isset($_GET['user']) && $mode == "Supprimer") utilisateur::FormSupp(); ?>
        </div>
    </section>
    <?php Js(); ?>
  </body>
</html>

