<?php

class Read
{

    public function showList($nav)
    {


        if (isset($_SESSION["user"]["IdCollab"])) {
        include(VIEW . "menu.php");
        }

        if ($nav == "listeExpos") {
            $titre = "Liste des expositions";
            $manager = new ExpositionManager();
            $expositions = $manager->findAll();
            $data = $expositions;
            

        }elseif($nav=='listeOeuvres'){
            $titre = "Liste des oeuvres";
            $manager = new OeuvreManager();
            $oeuvres = $manager->findAll();
            $data = $oeuvres;
        }


        $myView = new View('read');
        $myView->render($titre, $nav, $data);

        
    }
}
