
<?php 
include ("./_config.php");

$request = $_GET['r'];

include(CLASSES . '\routeur.php');

$routeur = new Routeur($request, "index");
$routeur->renderController();

