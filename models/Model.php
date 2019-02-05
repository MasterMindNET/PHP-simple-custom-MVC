<?php
/**
 * Created by PhpStorm.
 * User: Skylark
 * Date: 2/5/2019
 * Time: 2:49 PM
 */

class Model
{
    public $db;

    public function __construct($host, $user, $pass, $db)
    {
        $this->db = mysqli_connect($host, $user, $pass, $db);
        if(!$this->db){
            exit("No connection with DB");
        }
        if(!mysqli_select_db($this->db, $db)){
            exit('Your DB is empty');
        }

        mysqli_set_charset($this->db, 'utf8'); //mysqli_query($this->db, "SET NAMES utf-8"); -- not recommended. but can be used

        return $this->db;

    }

    public function getAllPosts(){
        $sql = "SELECT * FROM post LIMIT 10";
        $res = mysqli_query($this->db, $sql);
        $rows = null;

        if(!$res){
            return false;
        }else{
            for ($i = 0; $i < mysqli_num_rows($res); $i++){
                $rows [] = mysqli_fetch_array($res, MYSQLI_ASSOC);
            }
        }

        return $rows;
    }

    public function getSinglePost($id){
        $sql = "SELECT * FROM post WHERE id={$id} LIMIT 1";
        $res = mysqli_query($this->db, $sql);
        if(!$res){
            return false;
        }
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        return $row;
    }
}