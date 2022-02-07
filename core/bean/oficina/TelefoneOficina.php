<?php

namespace core\bean;

use core\vo\oficina\TelefoneOficinaVo;
use core\dao\oficina\TelefoneOficinaDao;

class TelefoneOficina
{
    private $dao;

    public function __construct()
    {
        $this->dao = new TelefoneOficinaDao();
    }
}