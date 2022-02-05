<?php

namespace core\dao;

use core\connection\Connection;
use core\vo\oficina\TipoServicoVo;
use PDOException;

class TipoServicoDao
{
    public function insert(TipoServicoVo $vo)
    {
        try{
            $sql = "INSERT INTO tiposervico (tiposervico, cdoficina) VALUES (:tiposervico, :cdoficina)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            if($vo->__get('tipoServico') !== null && $vo->__get('tipoServico') !== ''){
                $stmt->bindValue(':tiposervico', $vo->__get('tipoServico'));
            }
            if(is_numeric($vo->__get('cdoficina'))){
                $stmt->bindValue(':cdoficina', $vo->__get('cdOficina'));
            }
            return $stmt->execute();
        } catch(PDOException $ex) {

        }
    }
}