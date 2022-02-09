<?php

namespace core\dao\orcamento;

use core\vo\oficina\OrcamentoVo;
use core\connection\Connection;
use PDOException;

class OrcamentoDao
{
    public function insert(OrcamentoVo $vo)
    {
        try{
            $sql = "INSERT INTO orcamento (codorcamento, dtpreventrega, dtpreventrega, cdoficina) VALUES (:codorcamento, :dtpreventrega, :dsorcamento, :cdoficina)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':codorcamento', $vo->__get('codorcamento'));
            $stmt->bindValue(':dtpreventrega', $vo->__get('dtpreventrega'));
            $stmt->bindValue(':dtpreventrega', $vo->__get('dtpreventrega'));
            $stmt->bindValue(':cdoficina', $vo->__get('cdoficina'));
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