<?php
    session_start();

//    require "core/functions.php";
    require "model/bdd.php";
    include "config/config-genos.php";

    define('WEBROOT', dirname(__FILE__));
    define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
    define('ROOT', dirname(WEBROOT));
    define('DS', DIRECTORY_SEPARATOR);
    define('CORE',ROOT.DS.'core');

    date_default_timezone_set('Europe/Paris');

    $page ="";

          if(!isset($_GET['p']) || $_GET['p'] == "")
          {
            $_GET["p"] = 'login';
          }
          else
          {
            if(!file_exists("controller/".$_GET['p'].".php"))
            {
              $_GET['p'] = '404';
            }
            else
            {
              require "view/menu.php";
              $page = $_GET['p'];
            }
          }

    ob_start();//permet de ne plus renvoyer de contenu au navigateur
    require "controller/".$_GET['p'].".php";
    $content = ob_get_contents();//permet de recuperer le contenu executé depuis ob_start
    ob_end_clean();

    require "template.php";
