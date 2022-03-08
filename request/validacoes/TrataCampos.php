<?php

namespace core\tratamentos\validacoes;

class TrataCampos
{
    public static function verificaCamposTexto($campos)
    {
        foreach($campos as $campo)
        {
            if(empty($campo)){
                return true;
            }
        }
    }
}