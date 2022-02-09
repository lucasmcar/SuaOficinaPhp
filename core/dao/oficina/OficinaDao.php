<?php

namespace core\dao\oficina;

use core\vo\oficina\OficinaVo;
use core\connection\Connection;
use PDOException;

class OficinaDao
{
    public function insert(OficinaVo $vo)
    {
        try{
            $sql = "INSERT INTO oficina (nmoficina, email, cnpj) VALUES (:nmoficina, :email, :cnpj)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':nmoficina', $vo->__get('nmOficina'));
            $stmt->bindValue(':email', $vo->__get('email'));
            $stmt->bindValue(':cnpj', $vo->__get('cnpj'));
            $result = $stmt->execute(); 
            if($result){
                return true;
            }
        } catch(PDOException $ex) {
            $this->arrayError = [
                'error_msg' => $ex->getMessage(),
                'error_code' => $ex->getCode()
            ];
            return json_encode($this->arrayError);
        }
    }
}