<?php 
include ("./_session.php");
include ("./_config.php");

MyAutoLoad::start();

$request = $_GET['r'];

$routeur = new Routeur($request, "traduction");
$routeur->renderController();
