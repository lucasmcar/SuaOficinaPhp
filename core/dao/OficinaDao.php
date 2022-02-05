<?php

namespace core\dao;

use core\vo\oficina\OficinaVo;
use core\connection\Connection;
use PDOException;

class OficinaDao
{
    public function insert(OficinaVo $vo)
    {
        try{
            $sql = "INSERT INTO oficina (nmoficina, email) VALUES (:nmoficina, :email)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':nmoficina', $vo->__get('nmOficina'));
            $stmt->bindValue(':email', $vo->__get('email'));
            return $stmt->execute();
        } catch(PDOException $ex) {

        }
        
        
    }
}