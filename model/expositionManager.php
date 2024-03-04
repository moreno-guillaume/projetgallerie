<?php 

class ExpositionManager{
private $DBB;
private $DB;
    public function __construct(){

    $this->DBB = new connexionBDD('localhost', 'projetgallerie', 'root', '');
    $this->DB = $this->DBB->DB();
    }

    public function findAll(){

        $DBB = $this->DBB;
        $DB = $this->DB;

        // $req = $DB->prepare("SELECT e.*, se.LibelleStatutExpo AS LibelleStatut, te.LibelleThemeExpo AS LibelleTheme
        // FROM exposition e
        // JOIN statut_expo se ON e.IdStatutExpo = se.IdStatutExpo
        // JOIN theme_expo te ON e.IdThemeExpo = te.IdThemeExpo;");
        // $req->execute();

        $req = $DB->prepare("SELECT e.*, se.LibelleStatutExpo AS LibelleStatut, te.LibelleThemeExpo AS LibelleTheme, 
        trad.id_source, 
        trad.langue_destination AS langue, 
        trad.description_traduite,
        MAX(CASE WHEN trad.langue_destination = 'allemand' THEN trad.description_traduite ELSE NULL END) AS traduction_allemand,
        MAX(CASE WHEN trad.langue_destination = 'anglais' THEN trad.description_traduite ELSE NULL END) AS traduction_anglais,
        MAX(CASE WHEN trad.langue_destination = 'espagnol' THEN trad.description_traduite ELSE NULL END) AS traduction_espagnol
        FROM exposition e
        JOIN statut_expo se ON e.IdStatutExpo = se.IdStatutExpo
        JOIN theme_expo te ON e.IdThemeExpo = te.IdThemeExpo
        JOIN traductions trad ON e.IdExpo = trad.id_source
        WHERE  trad.type_source = 'exposition' AND trad.id_source = e.IdExpo AND trad.langue_destination IN ('allemand', 'anglais', 'espagnol');");
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
            $exposition->setStatut($row['LibelleStatut']);
            $exposition->setTheme($row['LibelleTheme']);
            $exposition->setPdf($row['IdPdf']);
            $exposition->setImage($row['ImageExpo']);
            $exposition->setPlan($row['PlanExpo']);

            switch ($row['langue']) {
                case 'allemand':
                    $exposition->setLangueAllemand($row['traduction_allemand']);
                    break;
                case 'anglais':
                    $exposition->setLangueAnglais($row['traduction_anglais']);
                    break;
                case 'espagnol':
                    $exposition->setLangueEspagnol($row['traduction_espagnol']);
                    break;
                }

            $expositions[] = $exposition;
            // var_dump($expositions); exit;
            // var_dump($lang); exit;
       
        }
        return $expositions;
  

    }

}