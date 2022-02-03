<?php

namespace core\bean;

use core\vo\OficinaVo;
use core\dao\OficinaDao;

class OficinaBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new OficinaDao();
    }

    public function insereRegistro(OficinaVo $vo)
    {
        $this->dao->insert($vo);
    }

}