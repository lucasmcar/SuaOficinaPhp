<?php

namespace core\system;

use core\types\StatusType;
use core\vo\oficina\TempoServicoVo;

/**
 * Classe responsavel por calcular tempo de serviço
 * Criada por Lucas Carvalho
 * 19/03/2022
 */
class Tempo
{

    private $tempoServicoVo;

    public function __construct(TempoServicoVo $vo)
    { 
        $this->tempoServicoVo = $vo;
    }

    /**
     * Função que calcula o tempo total para realizar o serviço
     * @param  $di data em que o serviço entra
     * @param  $df data em que ocorre a entrega do serviço
     * @return int $dias
     */
    public function contagemDias()
    {
        $dtFinal = $this->tempoServicoVo->__get('dtFinal');
        $dtInicial = $this->tempoServicoVo->__get('dtInicial');
        {
            $dif = strtotime($dtFinal) - strtotime($dtInicial);
               
            $dias =  floor($dif/(60*60*24));
        
            return $dias;
        }
    }

    /**
     * Função que retorna o status da previsão verificando se 
     * a quantidade de dias é maior, menor ou igual ao da previsão
     * @return StatusType
     * 
     */
    public function retornaStatusPrevisao()
    {
        $nrDiaPrevisao = $this->tempoServicoVo->__get('previsao');
        $totalDias = $this->contagemDias();

        if($totalDias > $nrDiaPrevisao){
            return StatusType::ATRASO;
        } else if ($totalDias < $nrDiaPrevisao){
            return StatusType::EM_DIA;
        } else {
            return StatusType::NO_PRAZO;
        }
    }
}