<?php

/**
 * Essa classe tem como método único, verificar se o usuário possui acesso ou se é o primeiro
 */
class VerificaPrimeiroAcesso
{

    public static function verificarAcesso()
    {
        if(!isset($_SESSION['user_count'])){
            $_SESSION['user_count'] = 1;
        } else {
            $_SESSION['user_count'] += 1;
        }

        
        if($_SESSION['user_count'] <= 1){
            return true;
        } else {
            return false;
        }

        
    }
}