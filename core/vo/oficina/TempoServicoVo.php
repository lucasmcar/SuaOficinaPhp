<?php

use FontLib\Table\Type\name;

namespace core\vo\oficina;

use core\vo\BaseVo;

class TempoServicoVo extends BaseVo
{
    protected $cdTempoServico;
    protected $dtInicial;
    protected $previsao;
    protected $dtFinal;
    protected $cdServico;

    public function __construct()
    {
        
    }
}