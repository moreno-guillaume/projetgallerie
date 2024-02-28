<?php

class Update
{

    public function showItem($nav)
    {


        if ($nav == "voirExpo") {


            $manager = new ExpositionManager();
            $expositions = $manager->findAll();
            $data = $expositions;
            $titre = "";
        }

        if (isset($_SESSION["user"]["IdCollab"])) {
            include(VIEW . "menu.php");
        }


        $myView = new View('update');
        $myView->render($titre, $nav, $data);
    }
}
