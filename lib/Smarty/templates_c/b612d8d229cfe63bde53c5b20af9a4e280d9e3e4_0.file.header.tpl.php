<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:11:58
  from 'D:\Projects\browsergame\app\Views\Parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efcceed41e89_29659430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b612d8d229cfe63bde53c5b20af9a4e280d9e3e4' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\Parts\\header.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_61efcceed41e89_29659430 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <title>Wizarding World</title>
    <!-- Latest Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <br/><br/>
      <div class="text-center" style="margin-bottom:20px;">
        <img src="images/header.png"/>
      </div>
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
          <?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- Content -->
        <div class="col-md-6">
          <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
            <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
          <?php }?>
          <div class="panel panel-default">
            <div class="panel-body"><?php }
}
