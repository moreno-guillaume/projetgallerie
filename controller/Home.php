<?php



class Home {

public function showHome($nav){

    $_Connexion = new Connexion;

    $titre = "connexion";   

    $myView = new View('Home');
    $myView->render($titre,$nav);



        if (!empty($_POST)) {
        extract($_POST);
            if (isset($_POST['connexion'])) {
                [$err_email, $err_password] = $_Connexion->verification_connexion($email, $password);
            }
        }

    echo $nav;


    if (isset($_SESSION["user"]["IdCollab"])) {
        include(VIEW ."menu.php");
    }

  
    }

}
