<?php

require ("./0-config/config.php");
//
//if (isset($_SESSION['connecte']))
//{
//    if (!isset($_GET['p']) || $_GET['p'] == "")
//        $p = "connexion";
//    else
//    {
//        if (!file_exists("./2-Controller/".$_GET['p'].".php"))
//            $p = "404";
//        else
//            $p = $_GET['p'];
//    }
//    ob_start();
//    require("./2-Controller/".$p.".php");
//    $content = ob_get_contents();
//    ob_end_clean();
//    require("template.php");
//}
//else
//    header("location:index.php");
//


if(!isset($_GET['p']) || $_GET['p'] == ""){
$_GET["p"] = 'connexion';
}else{
if(!file_exists("2-Controller/".$_GET['p'].".php"))  $_GET['p'] = '404';
else{
if(isset($_SESSION['connecte']) && $_SESSION['connecte'] === true){
$page = $_GET['p'];
}else{
header("location:index.php");
exit;
}
}
}

ob_start();//permet de ne plus renvoyer de contenu au navigateur
require "2-Controller/".$_GET['p'].".php";
$content = ob_get_contents();//permet de recuperer le contenu executé depuis ob_start
ob_end_clean();

require "template.php";
