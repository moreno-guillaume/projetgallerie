<?php 
include ("./_session.php");
include ("./_config.php");

MyAutoLoad::start();

$request = isset($_GET['r']) ? $_GET['r'] : '';

$routeur = new Routeur($request, "listeOeuvres");
$routeur->renderController();

