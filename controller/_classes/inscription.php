<?php
class Inscription
{
    private $valid;
    private $err_pseudo;
    private $err_email;
    private $err_password;
    public function verification_inscription($username, $email, $confemail, $password, $confpassword)
    {

        global $DB;

        $success_message = "";
        $username = ucfirst(filtres($username));
        $email = filtres($email);
        $confemail = filtres($confemail);
        $password = filtres($password);
        $confpassword = filtres($confpassword);

        $this->err_pseudo = "";
        $this->err_email = "";
        $this->err_password = "";
        $this->valid = true;

        $this->verification_username($username);
        $this->verification_email($email, $confemail);
        $this->verification_password($password, $confpassword);


        if ($this->valid) {
            $password = password_hash($password, PASSWORD_ARGON2ID);
            $date_inscription = date('Y-m-d H:i:s');
            $req = $DB->prepare("INSERT INTO users(username, email, password, date_inscription, date_connexion)VALUES(?,?,?,?,?)");
            $req->execute(array($username, $email, $password, $date_inscription, $date_inscription));

            $success_message ="Felicitations, votre compte a bien été créé. Bienvenue !";

            header("location:connexion.php");
            $_SESSION["user"] = [
                "success_message" => $success_message
            ];
            exit;
        }
        return [$this->err_pseudo, $this->err_email, $this->err_password];
    }

    private function verification_username($username)
    {
        global $DB;

        if (empty($username)) {
            $this->valid = false;
            $this->err_pseudo = "Ce champ ne peut pas être vide";
        } elseif (!preg_match("/^[a-zA-Z0-9\- ]*$/", $username)) {
            $this->valid = false;
            $this->err_pseudo = "Pseudo invalide";
        } elseif (grapheme_strlen($username) < 3) {
            $this->valid = false;
            $this->err_pseudo = "Le pseudo doit contenir au moins 5 caractères";
        } elseif (grapheme_strlen($username) > 18) {
            $this->valid = false;
            $this->err_pseudo = "Le pseudo ne doit pas contenir plus de 18 caractères";
        } else {

            $req = $DB->prepare("SELECT id FROM users WHERE username = ?");
            $req->execute(array($username));
            $req = $req->fetch();

            if (isset($req['id'])) {
                $this->valid = false;
                $this->err_pseudo = "Ce pseudo est déjà enregistré";
            }
        }
        return [$this->err_pseudo];
    }

    private function verification_email($email, $confemail)
    {

        global $DB;

        if (empty($email)) {
            $this->valid = false;
            $this->err_email = "Ce champ ne peut pas être vide";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->valid = false;
            $this->err_email = "email invalide";
        } elseif ($email <> $confemail) {
            $this->valid = false;
            $this->err_email = "Ces champs ne peuvent pas être differents.";
        } else {
            $req = $DB->prepare("SELECT id FROM users WHERE email = ?");
            $req->execute(array($email));
            $req = $req->fetch();

            if (isset($req['id'])) {
                $this->valid = false;
                $this->err_email = "Cet email est déjà enregistré";
            }
        }
    }

    private function verification_password($password, $confpassword)
    {

        global $DB;

        if (empty($password)) {
            $this->valid = false;
            $this->err_password = "Ce champ ne peut pas être vide";
        } elseif ($password <> $confpassword) {
            $this->valid = false;
            $this->err_password = "Ces champs ne peuvent pas être differents.";
        } elseif (grapheme_strlen($password) < 8) {
            $this->valid = false;
            $this->err_password = "Le mot de passe doit contenir au moins 8 caracteres";
        }
    }
}
