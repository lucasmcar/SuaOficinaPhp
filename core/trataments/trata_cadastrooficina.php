<?php

require('../vo/OficinaVo.php');
require('../vo/TipoServicoVo.php');

$nmoficina = filter_input(INPUT_POST, 'nmoficina');
$tiposervivo = filter_input(INPUT_POST, 'tipo');

