<?php

namespace core\dao\oficina;

use core\vo\oficina\TempoServicoVo;
use core\connection\Connection;
use PDOException;

class OficinaDao
{
    public function insert(TempoServicoVo $vo)
    {
        try{
            $sql = "INSERT INTO temposervico (dtinicial, previsao, dtfinal, cdservico) VALUES (:dtinicial, :previsao, :dtfinal, :cdservico)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':dtinicial', $vo->__get('dtinicial'));
            $stmt->bindValue(':previsao', $vo->__get('previsao'));
            $stmt->bindValue(':dtfinal', $vo->__get('dtfinal'));
            $stmt->bindValue(':cdservico', $vo->__get('cdservico'));
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