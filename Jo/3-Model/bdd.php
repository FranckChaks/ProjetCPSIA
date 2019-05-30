<?php

$bdd = new PDO("mysql:host=".PARAM_hote.";port=".PARAM_port.";dbname="
    .PARAM_nom_bdd.";charset=utf8", PARAM_utilisateur, PARAM_mdp);

