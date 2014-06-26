<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:00:35
         compiled from "layout/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333259955539bfcacb0d106-30465859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363ca49331529a863645b77c7cc10dcf120ffe77' => 
    array (
      0 => 'layout/templates/login.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333259955539bfcacb0d106-30465859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfcacb506f5_69505965',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfcacb506f5_69505965')) {function content_539bfcacb506f5_69505965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form method="post" class="form-inline">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required/>
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
