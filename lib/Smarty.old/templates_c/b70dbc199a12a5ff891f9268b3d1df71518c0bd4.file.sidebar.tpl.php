<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 21:06:38
         compiled from "layout\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2052253a87abe4476c4-60805903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b70dbc199a12a5ff891f9268b3d1df71518c0bd4' => 
    array (
      0 => 'layout\\templates\\sidebar.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2052253a87abe4476c4-60805903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a87abe44b540_72424765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a87abe44b540_72424765')) {function content_53a87abe44b540_72424765($_smarty_tpl) {?><div class="panel panel-default">
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
