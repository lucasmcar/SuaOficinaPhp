<?php
session_start();

require_once('vendor/autoload.php');

use core\connection\Connection;
use core\bean\OficinaBean;
use core\vo\oficina\OficinaVo;

/*$verificaAcesso = VerificaPrimeiroAcesso::verificarAcesso();

if($verificaAcesso){
    echo "<script>
            alert('Primeiro acesso? Você deverá acessar página de cadastro');
        </script>";
} else {
    header('location: public/login.php');
}*/


?>
