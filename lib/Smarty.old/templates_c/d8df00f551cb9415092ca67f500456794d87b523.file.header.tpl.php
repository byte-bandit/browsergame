<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 21:02:16
         compiled from "C:\xampp\htdocs\browsergame\app\Views\Parts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548953ac6e38dcece5-51677881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8df00f551cb9415092ca67f500456794d87b523' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\Parts\\header.tpl',
      1 => 1403809226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548953ac6e38dcece5-51677881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac6e38dde6e6_25322437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6e38dde6e6_25322437')) {function content_53ac6e38dde6e6_25322437($_smarty_tpl) {?><!DOCTYPE html>
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
