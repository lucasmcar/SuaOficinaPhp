<?php

require_once('configcon.php');

class Connection
{
    private static $instance;

    public static function getConnection(){

        try{
            self::$instance = new PDO('mysql:host=localhost;dbname='.BD, USER, PASS);
            self::$instance->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
            return self::$instance;
        } catch(PDOException $ex){
            return $ex->getMessage();
        }
    }
}