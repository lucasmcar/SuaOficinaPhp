<?php

namespace core\dao\veiculo;

use core\vo\veiculo\VeiculoVo;
use core\connection\Connection;
use PDOException;


class VeiculoDao
{
    public function insert(VeiculoVo $vo)
    {
        try{
            $sql = "INSERT INTO veiculo (nmveiculo, nrporta, placa, cor, cdmarca, cdproprietario) VALUES (:nmveiculo, :nrporta, :placa, :cor, :cdmarca, :cdproprietario)";
            $con = Connection::getConnection();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':nmveiculo', $vo->__get('nmVeiculo'));
            $stmt->bindValue(':nrporta', $vo->__get('nrPorta'));
            $stmt->bindValue(':placa', $vo->__get('cnpj'));
            $stmt->bindValue(':cor', $vo->__get('cnpj'));
            $stmt->bindValue(':cdmarca', $vo->__get('cnpj'));
            $stmt->bindValue(':cdproprietario', $vo->__get('cnpj'));
            $result = $stmt->execute(); 
            if($result){
                return true;
            }
        } catch(PDOException $ex) {
            return $ex->getMessage();
        }
    }
}