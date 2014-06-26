<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 23:39:40
         compiled from "C:\xampp\htdocs\browsergame\app\Views\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497553ac6bd3d1ec67-72811364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d5d61ec2e1c328e6690222bedb90477c4b6f085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\sidebar.tpl',
      1 => 1403818638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497553ac6bd3d1ec67-72811364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac6bd3d22ae2_98606314',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6bd3d22ae2_98606314')) {function content_53ac6bd3d22ae2_98606314($_smarty_tpl) {?><div class="panel panel-default">
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
