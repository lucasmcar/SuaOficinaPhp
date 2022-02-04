<?php


namespace core\dao;

use core\vo\OficinaFotoVo;
use core\connection\Connection;
use PDOException;

class OficinaFotoDao
{
    public function insertOficinaFoto(OficinaFotoVo $oficinaFotoVo)
    {
        try {
            $con  = Connection::getConnection();
            $sql  = "INSERT INTO fotooficina (nome, conteudo, tipo, tamanho, cdoficina) VALUES (:nome, :conteudo, :tipo, :tamanho, :cdoficina);";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':nome', $oficinaFotoVo->__get('nmfoto'));
            $stmt->bindValue(':conteudo', $oficinaFotoVo->__get('conteudo'));
            $stmt->bindValue(':tipo', $oficinaFotoVo->__get('tipo'));
            $stmt->bindValue(':tamanho', $oficinaFotoVo->__get('tamanho'));
            $stmt->bindValue(':cdoficina', $oficinaFotoVo->__get('cdOficina'));
            return $stmt->execute();
                
        } catch (PDOException $ex) {
            $this->arrayError = [
                'error_msg' => $ex->getMessage(),
                'error_code' => $ex->getCode()
            ];
            return json_encode($this->arrayError);
        }
    }
}