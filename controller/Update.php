<?php

class Update
{

    public function showItem($nav)
    {

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['language'])) {
                $language = $_POST['language'];}
                else{
                    $language ="";
                }
        }

        if (isset($_SESSION["user"]["IdCollab"])) {
            include(VIEW . "menu.php");
        }

        if ($nav == "voirExpo") {
            $manager = new ExpositionManager();
            $expositions = $manager->findAll();
            $data = $expositions;
            // $data = array(
            //     "expositions" => $expositions,
            //     "language" => $language
            // );
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
