<?php

namespace core\bean;

use core\vo\oficina\TipoServicoVo;
use core\dao\oficina\TipoServicoDao;

class TipoServicoBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new TipoServicoDao();
    }
}