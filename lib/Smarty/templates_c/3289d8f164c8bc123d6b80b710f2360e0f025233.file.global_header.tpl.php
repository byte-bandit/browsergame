<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 21:06:38
         compiled from "layout\templates\global_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2178153a87abe42ffc9-58697357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3289d8f164c8bc123d6b80b710f2360e0f025233' => 
    array (
      0 => 'layout\\templates\\global_header.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2178153a87abe42ffc9-58697357',
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
  'unifunc' => 'content_53a87abe43f9c1_77982060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a87abe43f9c1_77982060')) {function content_53a87abe43f9c1_77982060($_smarty_tpl) {?><!DOCTYPE html>
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
