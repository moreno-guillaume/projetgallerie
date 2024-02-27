<?php 
include ("./_session.php");
include ("./_config.php");

MyAutoLoad::start();

$request = $_GET['r'];

$DBB = new connexionBDD('localhost', 'pt7', 'root', '');
$DB = $DBB->DB();

$routeur = new Routeur($request, "index");
$routeur->renderController();

