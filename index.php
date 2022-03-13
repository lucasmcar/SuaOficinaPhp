<?php
session_start();

require_once('vendor/autoload.php');

date_default_timezone_set('AMERICA/SAO_PAULO');

use core\connection\Connection;
use core\bean\OficinaBean;
use core\vo\oficina\OficinaVo;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;


$generator = new BarcodeGeneratorPNG();
$barcode = $generator->getBarcode('1234567', $generator::TYPE_CODE_128);


$imgBase64 = base64_encode($barcode);


if(is_dir(__DIR__.'//bar//')){
    file_put_contents('bar/barcode'.date('d_m_Y_H_i').'.png', $barcode);
}







/*$verificaAcesso = VerificaPrimeiroAcesso::verificarAcesso();

if($verificaAcesso){
    echo "<script>
            alert('Primeiro acesso? Você deverá acessar página de cadastro');
        </script>";
} else {
    header('location: public/login.php');
}*/


?>