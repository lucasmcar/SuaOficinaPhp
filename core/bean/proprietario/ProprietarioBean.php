<?php

namespace core\bean;

use core\vo\proprietario\ProprietarioVo;
use core\dao\proprietario\ProprietarioDao;

class ProprietarioBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new ProprietarioDao();    
    }

    public function populaVo($vo)
    {
        
    }
}

