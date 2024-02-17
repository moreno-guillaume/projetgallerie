<?php



$_Connexion = new Connexion;


if($nav=="index"){

$titre = "connexion";   

if (!empty($_POST)) {
        extract($_POST);
        if (isset($_POST['connexion'])) {
            [$err_email, $err_password] = $_Connexion->verification_connexion($email, $password);
        }
    }
}



echo $nav;

 
include("./view/metas.php");
include("./view/header.php");

if (!isset($_SESSION["user"]["IdCollab"])) {
    include("./view/forms.php");
}

if (isset($_SESSION["user"]["IdCollab"])) {
    include("./view/menu.php");
}

include("./view/footer.php");
