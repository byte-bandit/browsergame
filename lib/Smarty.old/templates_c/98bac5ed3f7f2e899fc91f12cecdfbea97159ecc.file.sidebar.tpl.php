<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:00:36
         compiled from "layout/templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2112765605539bfc9c83ea38-82898402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98bac5ed3f7f2e899fc91f12cecdfbea97159ecc' => 
    array (
      0 => 'layout/templates/sidebar.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2112765605539bfc9c83ea38-82898402',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfc9c847855_33323886',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfc9c847855_33323886')) {function content_539bfc9c847855_33323886($_smarty_tpl) {?><div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php">Home</a><li>
      <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      <?php } else { ?>
        <li><a href="warehouse.php">Inventory</a></li>
        <li><a href="train.php">Train</a></li>
        <li><a href="forest.php">Forest</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="profile.php">My profile</a></li>
        <li><a href="rankings.php">Rankings</a></li>
        <li><a href="logout.php">Logout</a></li>
      <?php }?>
    </ul>
  </div>
</div><?php }} ?>
