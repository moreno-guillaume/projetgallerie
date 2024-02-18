<?php 
$nav ="index";
include ("./_config.php");


$request = $_GET['r'];

if ($request == "home"){
include(CONTROLLER . "\home.php");
}else{
    echo'404';
}
