<?php 

class Oeuvre{

    private $id;
    private $libelle;
    private $description;
    private $anneeCreation;
    private $qrCode;
    private $largeur;
    private $longueur;
    private $profondeur;
    private $poids;
    private $image;
    private $type;
    private $nomArtiste;
    private $prenomArtiste;
    private $statut;
    private $espace;
    private $expo;


   // Getters
   public function getId() {
    return $this->id;
}

public function getExpo() {
    return $this->expo;
}

public function getLibelle() {
    return $this->libelle;
}

public function getDescription() {
    return $this->description;
}

public function getAnneeCreation() {
    return $this->anneeCreation;
}

public function getQrCode() {
    return $this->qrCode;
}

public function getLargeur() {
    return $this->largeur;
}

public function getLongueur() {
    return $this->longueur;
}

public function getProfondeur() {
    return $this->profondeur;
}

public function getPoids() {
    return $this->poids;
}

public function getImage() {
    return $this->image;
}

public function getType() {
    return $this->type;
}

public function getNomArtiste() {
    return $this->nomArtiste;
}
public function getPrenomArtiste() {
    return $this->prenomArtiste;
}


public function getStatut() {
    return $this->statut;
}

public function getEspace() {
    return $this->espace;
}

// Setters
public function setId($id) {
    $this->id = $id;
}

public function setExpo($expo) {
    $this->expo = $expo;
}
public function setLibelle($libelle) {
    $this->libelle = $libelle;
}

public function setDescription($description) {
    $this->description = $description;
}

public function setAnneeCreation($anneeCreation) {
    $this->anneeCreation = $anneeCreation;
}

public function setQrCode($qrCode) {
    $this->qrCode = $qrCode;
}

public function setLargeur($largeur) {
    $this->largeur = $largeur;
}

public function setLongueur($longueur) {
    $this->longueur = $longueur;
}

public function setProfondeur($profondeur) {
    $this->profondeur = $profondeur;
}

public function setPoids($poids) {
    $this->poids = $poids;
}

public function setImage($image) {
    $this->image = $image;
}

public function setType($type) {
    $this->type = $type;
}

public function setNomArtiste($nomArtiste) {
    $this->nomArtiste = $nomArtiste;
}
public function setPrenomArtiste($prenomArtiste) {
    $this->prenomArtiste = $prenomArtiste;
}

public function setStatut($statut) {
    $this->statut = $statut;
}

public function setEspace($espace) {
    $this->espace = $espace;
}
}