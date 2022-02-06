<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:48:30
         compiled from "D:\Projects\browsergame\app\Views\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10209906336142864ea227e4-35589102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fd48e46b4e5b6a5033a1c1bba7154e2e1db97f' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\register.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10209906336142864ea227e4-35589102',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6142864ea49e13_29764924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6142864ea49e13_29764924')) {function content_6142864ea49e13_29764924($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="index.php?route=Register&action=register" method="post">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="email" name="email" placeholder="Email" class="form-control" required/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required maxlength="25"/>
  <input type="submit" value="Register" name="register" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
