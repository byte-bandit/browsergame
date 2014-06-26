<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 21:06:39
         compiled from "layout\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1528853a87abfba6793-71278596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093a2f18da4de494410af1105e5d3759229ad3fe' => 
    array (
      0 => 'layout\\templates\\login.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528853a87abfba6793-71278596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a87abfbd1719_91660541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a87abfbd1719_91660541')) {function content_53a87abfbd1719_91660541($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form method="post" class="form-inline">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required/>
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
