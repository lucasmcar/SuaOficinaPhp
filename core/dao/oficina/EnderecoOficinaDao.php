<?php

namespace core\dao\oficina;

use core\vo\oficina\EnderecoOficinaVo;
use core\connection\Connection;
use PDOException;

class EnderecoOficinaDao
{
    public function insert(EnderecoOficinaVo $vo)
    {
        try{
            $sql = "INSERT INTO endereco_oficina (logradouro, bairro, nrlogradouro, tipo, cdoficina, cdcidade) VALUES (:logradouro, :bairro, :nrlogradouro, :tipo, :cdoficina, :cdcidade)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':logradouro', $vo->__get('logradouro'));
            $stmt->bindValue(':bairro', $vo->__get('bairro'));
            $stmt->bindValue(':nrlogradouro', $vo->__get('nrlogradouro'));
            $stmt->bindValue(':tipo', $vo->__get('tipo'));
            $stmt->bindValue(':cdoficina', $vo->__get('cdoficina'));
            $stmt->bindValue(':cdcidade', $vo->__get('cdcidade'));
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