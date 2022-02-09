<?php

namespace core\connection;

class ConfigConnection
{
   

    private function __construct()
    { 
    }

    /**
     * Método que seta con
     * @return array
     */
    public static function setConfigConnection($file) 
    {
        $rootPath = $_SERVER['DOCUMENT_ROOT'];

        $file = realpath($rootPath.'//SuaOficina//'.$file);
        $envFile = parse_ini_file($file);
        return $envFile;
        
    }
}