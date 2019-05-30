<?php

require ("./0-config/config.php");

if (isset($_SESSION['connecte']))
{
    if (!isset($_GET['p']) || $_GET['p'] == "")
        $p = "accueil";
    else
    {
        if (!file_exists("./2-Controller/".$_GET['p'].".php"))
            $p = "404";
        else
            $p = $_GET['p'];
    }
    ob_start();
    require("./2-Controller/".$p.".php");
    $content = ob_get_contents();
    ob_end_clean();
    require("template.php");
}
else
    header("location: ./2-Controller/connexion.php");
?>
