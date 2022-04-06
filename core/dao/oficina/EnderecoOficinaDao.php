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

    public function select()
    {
        try{
            $sql = "SELECT * FROM endereco_oficina";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql)->fetch();
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

    public function udpate($id)
    {
        try{
            $dados = [
                'logradouro' => $_REQUEST['logradouro'],
                'bairro' => $_REQUEST['$bairro'],
                'nrlogradouro' => $_REQUEST['$nrlogradouro'],
                'tipo' => $_REQUEST['$tipo'],
                'cdoficina' => $_REQUEST['$cdoficina'],
                'cdcidade' => $_REQUEST['$cdcidade']
            ];

            $sql = "UPDATE endereco_oficina SET logradouro=:logradouro, bairro=:bairro, nrlogradouro=:nrlogradouro, tipo=:tipo, cdoficina=:cdoficina, cdcidade=:cdcidade WHERE cdEnderecoOFicina=:$id";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $result = $stmt->execute($dados); 
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

    public function delete($id)
    {
        try{
            $sql = "DELETE FROM endereco_oficina WHERE cdEnderecoOFicina=?";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $result = $stmt->execute([$id]); 
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