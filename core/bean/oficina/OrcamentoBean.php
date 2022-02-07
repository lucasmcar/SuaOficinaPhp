<?php

namespace core\bean;

use core\vo\oficina\OrcamentoVo;
use core\dao\oficina\OrcamentoDao;

class OrcamentoBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new OrcamentoDao();
    }
}