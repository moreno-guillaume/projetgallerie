<?php 

class View{

private $template;

public function __construct($template){

$this->template = $template;

}

public function render($titre,$nav){

$template = $this->template;

ob_start();
include(VIEW . $template . '.php');
$contenuPage = ob_get_clean();
include_once (VIEW . '_gabarit.php');

// include_once( VIEW . $template . '.php');

}

}