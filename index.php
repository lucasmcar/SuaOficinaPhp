<?php

include('includes/config.ini.php');

$titulo= "Sistema Sua Oficina";


$smarty->assign("titulo", $titulo);

$smarty->display('main-header/header.tpl');

