<?php

include('includes/config.ini.php');

$titulo= "Sistema Sua Oficina";


$smarty->assign("titulo", $titulo);

$smarty->display('default/header.tpl');
$smarty->display('default/footer.tpl');
$smarty->display('login/login.tpl');
