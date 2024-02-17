<?php 

ini_set("display_errors", "on");
error_reporting(E_ALL);

// echo '<pre>'; print_r($_SERVER);

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define ('HOST', "http://" . $host.'/projetgallerie2/');
// define('ROOT', $root . '.projetgallerie2/');
define('ROOT', dirname(__FILE__));
// echo HOST; exit;
//  echo ROOT; exit;

define ('CONTROLLER', ROOT .'\controller');
define ('VIEW',  ROOT .'\view');
define ('MODEL', ROOT .'\model');

define ('ASSETS', HOST.'assets/');

// echo CONTROLLER; exit;
//   echo VIEW; exit;
// echo CONTROLLER; exit;
// echo ASSETS; exit;