<?php

class Home
{

    public function showHome($nav)
    {
        $_Connexion = new Connexion;
    
        if ($nav == "index") {
            $titre = "connexion";
        } elseif ($nav == "reset") {
            $titre = "Réinitialisation";
        }
    
        $err_email = "";
        $err_password = "";
    
        if (isset($_POST['connexion'])) {
            extract($_POST);
            [$err_email, $err_password] = $_Connexion->verification_connexion($email, $password);
        }
    
        $myView = new View('Home');
    
        $data = array(
            'err_email' => $err_email,
            'err_password' => $err_password
        );
    
        $myView->render($titre, $nav, $data);
    
        if (isset($_SESSION["user"]["IdCollab"])) {
            include(VIEW . "menu.php");
        }
    }
}