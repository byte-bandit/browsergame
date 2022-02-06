<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 20:52:03
         compiled from "C:\xampp\htdocs\browsergame\app\Views\Parts\global_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1390253ac6bd3d036d0-24096036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6012ecd487bd7f425b3a52ea29b057b71cbc4d2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\Parts\\global_header.tpl',
      1 => 1403559490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1390253ac6bd3d036d0-24096036',
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
  'unifunc' => 'content_53ac6bd3d130d8_27693533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6bd3d130d8_27693533')) {function content_53ac6bd3d130d8_27693533($_smarty_tpl) {?><!DOCTYPE html>
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
        <img src="Layout/images/header.png"/>
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
