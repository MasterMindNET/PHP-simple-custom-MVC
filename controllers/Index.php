<?php
/**
 * Created by PhpStorm.
 * User: Skylark
 * Date: 2/5/2019
 * Time: 12:54 PM
 */

class Index extends AController
{
    public function __construct(){
        //echo __CLASS__;
    }

    public function getBody(){
        $model = new Model(HOST, USER, PASS, DB);
        $posts = $model->getAllPosts();

        return $this->render('index', [
            'posts' => $posts,
            'pageTitle' => 'Index Page'
        ]);
    }
}