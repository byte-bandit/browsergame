<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:11:58
  from 'D:\Projects\browsergame\app\Views\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efcceeda29f8_60874095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead941641332a4988c0c2a826de6ce2d5270317a' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\sidebar.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61efcceeda29f8_60874095 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
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
</div><?php }
}
