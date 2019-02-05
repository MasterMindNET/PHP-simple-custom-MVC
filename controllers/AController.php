<?php
/**
 * Created by PhpStorm.
 * User: Skylark
 * Date: 2/5/2019
 * Time: 3:14 PM
 */

abstract class AController
{
    abstract function getBody();

    protected function render($file, $params){
        extract($params);
        ob_start();
        require_once 'views/' . $file . '.php';
        return ob_get_clean();
    }
}