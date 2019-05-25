<?php

function login($login, $mdp)
{
    global $bdd;

    $req = $bdd -> prepare("SELECT * FROM user WHERE login = :login AND mdp = :mdp");
    $req->bindValue("login", $login, PDO::PARAM_STR);
    $req->bindValue("mdp", $mdp, PDO::PARAM_STR);
    $req->execute();

    return $req;

}

function rememberMe($id_u)
{
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM user WHERE id_u =".$_SESSION['id']);
    $requete->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $requete->execute();

    return $requete->fetch();
}