<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:00:36
         compiled from "layout/templates/global_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653320888539bfc9c825900-56835536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4386316d9c05ce36cdc0a084533f6c0ea276df7' => 
    array (
      0 => 'layout/templates/global_header.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653320888539bfc9c825900-56835536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfc9c83d095_52840022',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfc9c83d095_52840022')) {function content_539bfc9c83d095_52840022($_smarty_tpl) {?><!DOCTYPE html>
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
        <img src="layout/images/header.png"/>
      </div>
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
          <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
            <div class="panel-body"><?php }} ?>
