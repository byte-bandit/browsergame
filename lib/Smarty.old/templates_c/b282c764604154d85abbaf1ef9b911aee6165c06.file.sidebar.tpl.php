<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:47:39
         compiled from "D:\Projects\browsergame\app\Views\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13313664126142861b7dfb37-61124766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b282c764604154d85abbaf1ef9b911aee6165c06' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\sidebar.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13313664126142861b7dfb37-61124766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6142861b7e2609_58528556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6142861b7e2609_58528556')) {function content_6142861b7e2609_58528556($_smarty_tpl) {?><div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php?route=Home&action=index">Home</a><li>
      <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
        <li><a href="index.php?route=Register&action=index">Register</a></li>
        <li><a href="index.php?route=Login&action=index">Login</a></li>
      <?php } else { ?>
        <li><a href="index.php?route=Inventory&action=index">Inventory</a></li>
        <li><a href="index.php?route=Train&action=index">Train</a></li>
        <li><a href="index.php?route=Forest&action=index">Forest</a></li>
        <li><a href="index.php?route=Shop&action=index">Shop</a></li>
        <li><a href="index.php?route=Profile&action=index">Profile</a></li>
        <li><a href="index.php?route=Rankings&action=index">Rankings</a></li>
        <li><a href="index.php?route=Logout&action=logout">Logout</a></li>
      <?php }?>
    </ul>
  </div>
</div><?php }} ?>
