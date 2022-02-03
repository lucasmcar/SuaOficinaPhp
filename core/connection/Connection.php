<?php

namespace core\connection;

require_once('configcon.php');
use PDO;
use PDOException;

class Connection
{
    private static $instance;

    public static function getConnection(){

        self::$instance = null;
        
        try{
            self::$instance = new PDO('mysql:host=localhost;dbname='.BD, USER, PASS);
            self::$instance->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
            return self::$instance;
        } catch(PDOException $ex){
            return $ex->getMessage();
        }
    }
}