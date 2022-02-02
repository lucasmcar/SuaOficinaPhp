<?php
session_start();
include('includes/config.ini.php');

$titulo= "Sistema Sua Oficina";


$smarty->assign("titulo", $titulo);

$smarty->display('default/header.tpl');


if(!isset($_SESSION)){
    include("login.php");
}

$smarty->display('default/footer.tpl');

