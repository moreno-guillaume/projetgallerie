<?php

ini_set("display_errors", "on");
error_reporting(E_ALL);

// echo '<pre>'; print_r($_SERVER); exit;

class MyAutoLoad
{
     public static function start()
    {

        spl_autoload_register(array(__CLASS__,'autoload'));
        // $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', "http://" . $host . '/projetgallerie2/');
        define('ROOT', dirname(__FILE__));

        define('CONTROLLER', ROOT . '/controller/');
        define('VIEW',  ROOT . '/view/');
        define('MODEL', ROOT . '/model/');
        define('CLASSES', CONTROLLER . '_classes/');
        // echo CLASSES; exit;
        // echo MODEL; exit;

        define('ASSETS', HOST . 'assets/');
    }

    public static function autoload($class){

        if(file_exists(MODEL . $class . '.php')){
            include_once(MODEL. $class . '.php');
        }elseif (file_exists( CLASSES. $class . '.php')){
            include_once(CLASSES. $class . '.php');
        }elseif (file_exists(CONTROLLER)){
            include_once(CONTROLLER . $class . '.php');
        }
    }

}
