<?php 

//  $filtres = new Filtres();

class Connexion {
    
    private $valid;
    private $err_email;
    private $err_password;

    public function verification_connexion($email,$password){

  global $DB;

  $filtres = new Filtres();

    $email = $filtres->filtres($email);
    $password = $filtres->filtres($password);

    $this->valid = true;

    if (empty($email)) {
        $this->valid = false;
        $this->err_email = "Le champ Email ne peut pas être vide";
    }

    if (empty($password)) {
        $this->valid = false;
        $this->err_password = "Le champ mot de passe ne peut pas être vide";
    }

    if ($this->valid) {
        $req = $DB->prepare("SELECT * FROM COLLABORATEUR WHERE EmailCollab = ?");
        $req->execute(array($email));
        $req_user = $req->fetch();

        // A remplacer quand les mots de passe seront hachés dans la db, avec : 
        // if ($req_user && password_verify($password, $req_user['password'])) {
        if ($req_user && $password === $req_user['PassCollab']) {
        
            $_SESSION["user"] = [
                "IdCollab" => $req_user['IdCollab'], 
                "NomCollab" => $req_user['NomCollab'],
                "PrenomCollab" => $req_user['PrenomCollab'],
                "EmailCollab" => $req_user['EmailCollab'],
                "IdPoste" => $req_user['IdPoste']
            ];

            header("location:home");
        
        } else {
            $this->valid = false;
            $this->err_password = "Email et / ou mot de passe incorrect";
        }
    }

    return [$this->err_email,$this->err_password];
    
}
}
