<?php

namespace core\bean;

use core\vo\oficina\EnderecoOficinaVo;
use core\dao\oficina\EnderecoOficinaDao;

class EnderecoOficinaBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new EnderecoOficinaDao();
    }
}