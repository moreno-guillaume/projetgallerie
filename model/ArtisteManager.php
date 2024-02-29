<?php 

class ArtisteManager{

private $DBB;
private $DB;
    public function __construct(){

    $this->DBB = new connexionBDD('localhost', 'projetgallerie', 'root', '');
    $this->DB = $this->DBB->DB();
    }

    public function findAll(){

        $DBB = $this->DBB;
        $DB = $this->DB;

        $req = $DB->prepare("SELECT ar.*, act.LibelleActivite
        FROM artiste ar
        JOIN activite_artiste act ON ar.IdActivite = act.IdActivite
        ;");
        $req->execute();

        while($row=$req->fetch(PDO::FETCH_ASSOC)){

            $artiste = new Artiste();

            $artiste->setId($row['IdArtiste']);
            $artiste->setNom($row['NomArtiste']);
            $artiste->setPrenom($row['PrenomArtiste']);
            $artiste->setBiographie($row['BiographieArtiste']);
            $artiste->setActivite($row['LibelleActivite']);
            $artiste->setNationalite($row['NationaliteArtiste']);
            $artiste->setDateNaissance($row['DateNaissanceArtiste']);
            $artiste->setDateDeces($row['DateDecesArtiste']);
            $artiste->setPhoto($row['PhotoArtiste']);

            $artistes[] = $artiste;
        }
        
        return $artistes;

    }
}