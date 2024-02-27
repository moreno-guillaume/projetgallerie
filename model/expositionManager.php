<?php 

class ExpositionManager{

private $DBB;
private $DB;
    public function __construct(){

    $this->DBB = new connexionBDD('localhost', 'pt7', 'root', '');
    $this->DB = $this->DBB->DB();
    }

    public function findAll(){

        $DBB = $this->DBB;
        $DB = $this->DB;

        $req = $DB->prepare("SELECT *
                FROM exposition");
        $req->execute();

        while($row=$req->fetch(PDO::FETCH_ASSOC)){

            $exposition = new Exposition();

            $exposition->setId($row['IdExpo']);
            $exposition->setLibelle($row['LibelleExpo']);
            $exposition->setDateDebut($row['DateDebutExpo']);
            $exposition->setDateFin($row['DateFinExpo']);
            $exposition->setDescription($row['DescriptionExpo']);
            $exposition->setNombreOeuvres($row['NombreOeuvresExpo']);
            $exposition->setNombreVisit($row['NombreVisiteursExpo']);
            $exposition->setStatut($row['IdStatutExpo']);
            $exposition->setTheme($row['IdThemeExpo']);
            $exposition->setPdf($row['IdPdf']);

            $expositions[] = $exposition;
            // var_dump($expositions); exit;
        }
        
        return $expositions;


    }
}