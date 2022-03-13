<?php


namespace core\tratamentos;

require('../../vendor/autoload.php');

use core\vo\OficinaVo as Oficina;
use core\bean\OficinaBean as OBean;

use core\tratamentos\validacoes\TrataCampos;

$nmoficina   = filter_input(INPUT_POST, 'nmuser', FILTER_UNSAFE_RAW);
$email       = filter_input(INPUT_POST, 'nmoficina');
$tiposervivo = filter_input(INPUT_POST, 'tipo');

$response = TrataCampos::verificaCamposTexto($nmoficina);