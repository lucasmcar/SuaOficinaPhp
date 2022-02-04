<?php

namespace core\vo;

use core\vo\BaseVo as Base;

class ServicoVo extends Base
{
    protected $cdServico;
    protected $dsServico;
    protected $dtEntrada;
    protected $dtSaida;
    protected $nrDias;
    protected $cdOrcamento;
    protected $cdVeiculo;
    protected $cdTipoServico;

    public function __construct()
    {
        
    }
}