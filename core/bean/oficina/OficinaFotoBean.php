<?php

namespace core\bean;

use core\vo\oficina\OficinaFotoVo;
use core\dao\oficina\OficinaFotoDao;

class OficinaFotoBean
{

    private $dao;

    public function __construct()
    {
        $this->dao = new OficinaFotoDao();
    }

    public function insereRegistro(OficinaFotoVo $vo)
    {
        $this->dao->insertOficinaFoto($vo);
    }

}