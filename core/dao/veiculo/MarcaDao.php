<?php

namespace core\dao\veiculo;

use core\vo\veiculo\MarcaVo;
use core\connection\Connection;
use PDOException;

class MarcaDao
{

    public static function findAll()
    {
        try{
            $con = Connection::getConnection();
            $sql = "SELECT cdmarca, marca FROM marca;";
            $stmt = $con->prepare($sql);
            $marcas = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $marcas;
        } catch(PDOException $ex) {
            return $ex->getMessage();
        }
        
    }
}