<?php

class Read
{

    public function showList($nav)
    {

        if ($nav == "listeExpos") {
            $titre = "Liste des expositions";
        }

        if (isset($_SESSION["user"]["IdCollab"])) {
            include(VIEW . "menu.php");
        }

        $manager = new ExpositionManager();
        $expositions = $manager->findAll();
        $data = $expositions;


        if ($nav == "listeExpos") {
            $titre = "Liste des expositions";
        }

        $myView = new View('read');
        $myView->render($titre, $nav, $data);

        
    }
}
