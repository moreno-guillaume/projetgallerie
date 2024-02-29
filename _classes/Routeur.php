<?php 


// include_once(CONTROLLER . "/Home.php");


/**
 * Créé les routes, trouve les controllers,
 * déclare la variables $nav selon la requete
 */
class Routeur {
private $request;
public $nav;
private $routes = [

    "home" => ["controller" => 'home', "method" => 'showHome', "nav" => 'index'], 
    "reset" => ["controller" => 'home', "method" => 'showHome', "nav" => 'reset'],

    "listeExpos" => ["controller" => 'Read', "method"=> 'showList', "nav" => 'listeExpos'],
    "listeOeuvres" => ["controller" => 'Read', "method" => 'showList', "nav" => 'listeOeuvres'],
    "listeArtistes" => ["controller" => 'Read', "method" => 'showList', "nav" => 'listeArtistes'],

    "voirExpo" => ["controller" => 'Update', "method" => 'showItem', "nav" => 'voirExpo'],
    "voirOeuvre" => ["controller" => 'Update', "method" => 'showItem', "nav" => 'voirOeuvre']
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