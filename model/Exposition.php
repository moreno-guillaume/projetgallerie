<?php 

class Exposition{

    private $id;
    private $libelle;
    private $dateDebut;
    private $dateFin;
    private $description;
    private $nombreOeuvres;
    private $nombreVisit;
    private $statut;
    private $theme;
    private $pdf;
    private $image;

    private $langueAllemand;
    private $langueAnglais;
    private $langueEspagnol;
    private $plan;

    public function setPlan($plan) {
        $this->plan = $plan;
    }

     public function getPlan() {
        return $this->plan;
    }

    public function setLangueAllemand($traduction) {
        $this->langueAllemand = $traduction;
    }

     public function getLangueAllemand() {
        return $this->langueAllemand;
    }

    public function setLangueAnglais($traduction) {
        $this->langueAnglais = $traduction;
    }
public function getLangueAnglais() {
        return $this->langueAnglais;
    }
    public function getLangueEspagnol() {
        return $this->langueEspagnol;
    }

    public function setLangueEspagnol($traduction) {
        $this->langueEspagnol = $traduction;
    }

   // Setter pour $image
   public function setImage($image) {
    $this->image = $image;
}

// Getter pour $image
public function getImage() {
    return $this->image;
}

   // Setter pour $id
   public function setId($id) {
    $this->id = $id;
}

// Getter pour $id
public function getId() {
    return $this->id;
}


public function setLibelle($libelle) {
    $this->libelle = $libelle;
}

// Getter pour $libelle
public function getLibelle() {
    return $this->libelle;
}

// Setter pour $dateDebut
public function setDateDebut($dateDebut) {
    $this->dateDebut = $dateDebut;
}

// Getter pour $dateDebut
public function getDateDebut() {
    return $this->dateDebut;
}

// Setter pour $dateFin
public function setDateFin($dateFin) {
    $this->dateFin = $dateFin;
}

// Getter pour $dateFin
public function getDateFin() {
    return $this->dateFin;
}

// Setter pour $description
public function setDescription($description) {
    $this->description = $description;
}

// Getter pour $description
public function getDescription() {
    return $this->description;
}

// Setter pour $nombreExpos
public function setNombreOeuvres($nombreOeuvres) {
    $this->nombreOeuvres = $nombreOeuvres;
}

// Getter pour $nombreExpos
public function getNombreOeuvres() {
    return $this->nombreOeuvres;
}

// Setter pour $nombreVisit
public function setNombreVisit($nombreVisit) {
    $this->nombreVisit = $nombreVisit;
}

// Getter pour $nombreVisit
public function getNombreVisit() {
    return $this->nombreVisit;
}

// Setter pour $statut
public function setStatut($statut) {
    $this->statut = $statut;
}

// Getter pour $statut
public function getStatut() {
    return $this->statut;
}

// Setter pour $theme
public function setTheme($theme) {
    $this->theme = $theme;
}

// Getter pour $theme
public function getTheme() {
    return $this->theme;
}

// Setter pour $pdf
public function setPdf($pdf) {
    $this->pdf = $pdf;
}

// Getter pour $pdf
public function getPdf() {
    return $this->pdf;
}
}



