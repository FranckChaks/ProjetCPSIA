<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=testCPSIA;charset=utf8","root","");
    }
    catch(Exception $e)
    {
        die("Erreur de connexion");
    }


