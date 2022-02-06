<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:47:41
         compiled from "D:\Projects\browsergame\app\Views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20906493496142861d9d3f11-61305519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa8d56fab3db1fe1026e88c5d0a5ea9d51b846d' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\login.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20906493496142861d9d3f11-61305519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6142861d9ffc77_04347513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6142861d9ffc77_04347513')) {function content_6142861d9ffc77_04347513($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="index.php?route=Login&action=login" method="post" class="form-inline">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required/>
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
