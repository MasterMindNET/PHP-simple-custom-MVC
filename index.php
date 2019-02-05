<?php
/**
 * Created by PhpStorm.
 * User: Skylark
 * Date: 2/5/2019
 * Time: 12:41 PM
 */
require_once "config.php";
header("Content-Type:text/html;charset='utf-8'");

function __autoload($file){
    if(file_exists('controllers/' . $file . '.php')){
        require_once 'controllers/' . $file . '.php';
    }elseif(file_exists('models/' . $file . '.php')){
        require_once 'models/' . $file . '.php';
    }
}

//http://mvc.solo/index.php?option=view //option=controllerNAME

if(isset($_GET['option'])){
    $class = strip_tags(ucfirst($_GET['option']));
    $init = null;

    switch($class){
        case 'View':
            $init = new $class;
            break;
        default:
            $init = new Index;
        break;
    }
}else{
    $init = new Index;
}
