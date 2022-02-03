<?php
session_start();

require_once('vendor/autoload.php');

use core\bean\OficinaBean;
use core\vo\OficinaVo;

/*$verificaAcesso = VerificaPrimeiroAcesso::verificarAcesso();

if($verificaAcesso){
    echo "<script>
            alert('Primeiro acesso? Você deverá acessar página de cadastro');
        </script>";
} else {
    header('location: public/login.php');
}*/

$oficina = new OficinaVo;
$beanOfi = new OficinaBean();

$oficina->__set('nmOficina', 'Oficina Teste');
$oficina->__set('email', 'oficinateste@teste.com');

$result = $beanOfi->insereRegistro($oficina);

if($result){
    echo "<script>
            alert('Oficina Inserida com sucesso');
        </script>";
}





