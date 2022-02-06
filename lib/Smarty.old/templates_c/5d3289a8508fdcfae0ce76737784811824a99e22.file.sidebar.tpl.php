<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:36:31
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:879853a890d5c05c00-84099818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3289a8508fdcfae0ce76737784811824a99e22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\sidebar.tpl',
      1 => 1403559388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879853a890d5c05c00-84099818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a890d5c09a99_10407941',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a890d5c09a99_10407941')) {function content_53a890d5c09a99_10407941($_smarty_tpl) {?><div class="panel panel-default">
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
