<?php
/**
 * Created by PhpStorm.
 * User: Skylark
 * Date: 2/5/2019
 * Time: 12:54 PM
 */

class View extends AController
{
    public function __construct(){
        //echo __CLASS__;
    }

    public function getBody(){
        if(!isset($_GET['id'])){
            exit('Wrong Param(s)');
        }else{
            $id = (int)$_GET['id'];
            if($id == 0){
                exit('Wrong id');
            }else{
                $model = new Model(HOST, USER, PASS, DB);
                $post = $model->getSinglePost($id);
                return $this->render('singlePost', ['post' => $post]);
            }
        }
    }
}