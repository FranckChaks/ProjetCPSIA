<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=projetcpsia;charset=utf8","root","");
    }
    catch(Exception $e)
    {
        die("Erreur de connexion");
    }


