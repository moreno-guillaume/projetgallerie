
<?php
require_once './controller/_classes/_pdo.php';
session_start();

if (isset($_SESSION["user"]["IdCollab"])){
    $IdCollab = $_SESSION["user"]["IdCollab"];
    $NomCollab = $_SESSION["user"]["NomCollab"];
    $PrenomCollab = $_SESSION["user"]["PrenomCollab"];
    $EmailCollab = $_SESSION["user"]["EmailCollab"];
    $IdPoste = $_SESSION["user"]["IdPoste"];
}


