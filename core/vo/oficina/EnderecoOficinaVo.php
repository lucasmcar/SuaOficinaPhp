<?php

namespace core\vo\oficina;

use core\vo\BaseVo as Base;

class EnderecoOficinaVo extends Base
{
    protected $cdEnderecoOFicina;
    protected $logradouro;
    protected $bairro;
    protected $nrLogradouro;
    protected $tipo;
    protected $cdOficina;
    protected $cdCidade;


    public function __construct()
    {
        
    }
}