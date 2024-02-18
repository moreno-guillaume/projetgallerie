<?php 

ini_set("display_errors", "on");
error_reporting(E_ALL);

// echo '<pre>'; print_r($_SERVER); exit;

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define ('HOST', "http://" . $host.'/projetgallerie2/');
define('ROOT', dirname(__FILE__));


define ('CONTROLLER', ROOT .'\controller');
define ('VIEW',  ROOT .'\view');
define ('MODEL', ROOT .'\model');
define ('CLASSES', CONTROLLER . '\_classes');


define ('ASSETS', HOST.'assets/');
