<?php

namespace core\bean;

use core\vo\oficina\ServicoVo;
use core\dao\oficina\ServicoDao;

class ServicoBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new ServicoDao();
    }
}