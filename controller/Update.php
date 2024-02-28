<?php

class Update
{

    public function showItem($nav)
    {

        if (isset($_SESSION["user"]["IdCollab"])) {
            include(VIEW . "menu.php");
        }

        if ($nav == "voirExpo") {
            $manager = new ExpositionManager();
            $expositions = $manager->findAll();
            $data = $expositions;
            $titre = "";
        }
        
        elseif($nav=='voirOeuvre'){
        $titre = "";
        $manager = new OeuvreManager();
        $oeuvres = $manager->findAll();
        $data = $oeuvres;
    }




        $myView = new View('update');
        $myView->render($titre, $nav, $data);
    }
}
