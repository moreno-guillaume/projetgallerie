<?php 

class OeuvreManager{

private $DBB;
private $DB;
    public function __construct(){

    $this->DBB = new connexionBDD('localhost', 'projetgallerie', 'root', '');
    $this->DB = $this->DBB->DB();
    }

    public function findAll(){

        $DBB = $this->DBB;
        $DB = $this->DB;

        $req = $DB->prepare("SELECT o.*, so.LibelleStatutOeuvre as LibelleStatut, ex.LibelleExpo, art.NomArtiste, art.PrenomArtiste, t_o.LibelleTypeOeuvre
        FROM oeuvre o
        JOIN statut_oeuvre so ON o.IdStatutOeuvre = so.IdStatutOeuvre
        JOIN exposition ex ON o.IdExpo = ex.IdExpo
        JOIN artiste art ON o.IdArtiste = art.IdArtiste
        JOIN type_oeuvre t_o ON o.IdTypeOeuvre = t_o.IdTypeOeuvre");
        $req->execute();

        while($row=$req->fetch(PDO::FETCH_ASSOC)){

            $oeuvre= new Oeuvre();

            $oeuvre->setId($row['IdOeuvre']);
            $oeuvre->setLibelle($row['LibelleOeuvre']);
            $oeuvre->setDescription($row['DescriptionOeuvre']);
            $oeuvre->setAnneeCreation($row['AnneeCreationOeuvre']);
            $oeuvre->setQrCode($row['QrcodeOeuvre']);
            $oeuvre->setLargeur($row['LargeurOeuvre']);
            $oeuvre->setLongueur($row['LongueurOeuvre']);
            $oeuvre->setProfondeur($row['ProfondeurOeuvre']);
            $oeuvre->setPoids($row['PoidsOeuvre']);
            $oeuvre->setType($row['LibelleTypeOeuvre']);
            $oeuvre->setExpo($row['LibelleExpo']);
            $oeuvre->setNomArtiste($row['NomArtiste']);
            $oeuvre->setPrenomArtiste($row['PrenomArtiste']);
            $oeuvre->setStatut($row['LibelleStatut']);
            $oeuvre->setEspace($row['IdEspace']);

            $oeuvres[] = $oeuvre;
            
        }

        return $oeuvres;

    }
}