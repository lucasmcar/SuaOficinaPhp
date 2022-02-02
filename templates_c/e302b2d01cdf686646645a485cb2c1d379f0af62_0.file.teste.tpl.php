<?php
/* Smarty version 4.0.4, created on 2022-02-02 02:29:03
  from 'C:\laragon\www\SuaOficina\templates\teste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61f9ec6fcae3d5_56794717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e302b2d01cdf686646645a485cb2c1d379f0af62' => 
    array (
      0 => 'C:\\laragon\\www\\SuaOficina\\templates\\teste.tpl',
      1 => 1643768940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f9ec6fcae3d5_56794717 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem vindo
    
    <hr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
        <p>Nome: <?php echo $_smarty_tpl->tpl_vars['data']->value['nome'];?>

        <p>Email: <?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
