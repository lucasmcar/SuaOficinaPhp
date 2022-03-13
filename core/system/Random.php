<?php

namespace core\system;

class Random
{

    private function __construct()
    {
        
    }
    /**
     * Método que gera um valor randomico para o valor do orçamento,
     * @return $random
     */
    public static function generateRandomCode()
    {
        $random = rand(000000, 999999);
        return $random;
    }
}