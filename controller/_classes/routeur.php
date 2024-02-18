<?php 
/**
 * Créé les routes, trouve les controllers,
 * déclare la variables $nav selon la requete
 */
class Routeur {
private $request;
private $nav;
private $routes = ["home" => "home", "reset" => "reset"];


public function __construct($request, $page){

    $this->request = $request;
    $this->nav = $page;
}

public function renderController(){

    $request = $this->request;
    $nav = $this->nav;
    // echo $nav; exit;

    if(key_exists($request, $this->routes)){

    $controller = $this->routes[$request];
    include(CONTROLLER . '/' . $controller . '.php');
}
else{
echo '404';
    }
}
}