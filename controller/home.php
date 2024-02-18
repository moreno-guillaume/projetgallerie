<?php

include("./_session.php");
include("./controller/_functions/filtres.php");
include("./controller/_classes/connexion.php");


$_Connexion = new Connexion;



$titre = "connexion";   

if (!empty($_POST)) {
        extract($_POST);
        if (isset($_POST['connexion'])) {
            [$err_email, $err_password] = $_Connexion->verification_connexion($email, $password);
        }
    }


echo $nav;

 
include("./view/metas.php");
include("./view/header.php");

if (!isset($_SESSION["user"]["IdCollab"])) {
    include(VIEW . "/forms.php");
}

if (isset($_SESSION["user"]["IdCollab"])) {
    include(VIEW ."/menu.php");
}

include( VIEW . "/footer.php");
