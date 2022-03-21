<?php

namespace core\bean;

use core\vo\veiculo\VeiculoVo;
use core\dao\veiculo\VeiculoDao;

class VeiculoBean
{

    private $dao;
    private $vo;

    public function __construct()
    {
        $this->dao = new VeiculoDao();    
           
    }

    public function insereRegistro(VeiculoVo $vo)
    {
        if($vo !== null){
            return $this->dao->insert($this->populaVo($vo));
        } else {
            return false;
        }
    }

    public function populaComArray($array)
    {
        $vo = new VeiculoVo(); 
        $vo->__set('nmVeiculo', trim($array['nmVeiculo']));
        $vo->__set('nrPorta', $array['nrPorta']);
        $vo->__set('placa', trim($array['placa']));
        $vo->__set('cor', trim($array['cor']));
        $vo->__set('cdMarca', $array['cdMarca']);
        $vo->__set('cdProprietario', $array['cdProprietario']);
        
        return $vo;
    }


    public function populaVo($vo1)
    {
        $vo = new VeiculoVo(); 
        $vo->__set('nmVeiculo', trim($vo1->__get('nmVeiculo')));
        if(is_numeric($vo1->__get('nrPorta'))){
            $vo->__set('nrPorta', $vo1->__get('nrPorta'));
        }
        $vo->__set('placa', trim($vo1->__get('placa')));
        $vo->__set('cor', trim($vo1->__get('cor')));
        if(is_numeric($vo1->__get('cdMarca'))){
            $vo->__set('cdMarca', $vo1->__get('cdMarca'));
        }
        if(is_numeric($vo1->__get('cdProprietario'))){
            $vo->__set('cdProprietario', $vo1->__get('cdProprietario'));
        }

        return $vo;
    }
}