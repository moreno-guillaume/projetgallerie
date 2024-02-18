<?php 


include_once(CONTROLLER . "/Home.php");


/**
 * Créé les routes, trouve les controllers,
 * déclare la variables $nav selon la requete
 */
class Routeur {
private $request;
public $nav;
private $routes = [
    "home" => ["controller" => 'home', "method" => 'showHome', "nav" => 'index'], 
    "reset" => ["controller" => 'home', "method" => 'showHome', "nav" => 'reset']
            ];


public function __construct($request, $nav){

    $this->request = $request;
    $this->nav = $nav;

}

public function renderController(){

    $request = $this->request;
    

    if(key_exists($request, $this->routes)){

    $this->nav = $this->routes[$request]['nav'];

    $controller = $this->routes[$request]['controller'];
    $method = $this->routes[$request]['method'];
  
    $currenController = new $controller();
    $currenController->$method($this->nav);
}
else{
echo '404';
    }
}
}