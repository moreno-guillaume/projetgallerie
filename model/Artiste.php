<?php 

class Artiste{

    private $id;
    private $nom;
    private $prenom;
    private $biographie;
    private $activite;
    private $nationalite;
    private $dateNaissance;
    private $dateDeces;
    private $photo;
   
    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setBiographie($biographie) {
        $this->biographie = $biographie;
    }

    public function setActivite($activite) {
        $this->activite = $activite;
    }

    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function setDateDeces($dateDeces) {
        $this->dateDeces = $dateDeces;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getBiographie() {
        return $this->biographie;
    }

    public function getActivite() {
        return $this->activite;
    }

    public function getNationalite() {
        return $this->nationalite;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getDateDeces() {
        return $this->dateDeces;
    }

    public function getPhoto() {
        return $this->photo;
    }
}
