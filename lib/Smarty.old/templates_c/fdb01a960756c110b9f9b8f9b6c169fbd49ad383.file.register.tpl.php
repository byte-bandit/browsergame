<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:00:42
         compiled from "layout/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:812348509539c0ffa0d9ae6-46031174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdb01a960756c110b9f9b8f9b6c169fbd49ad383' => 
    array (
      0 => 'layout/templates/register.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '812348509539c0ffa0d9ae6-46031174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539c0ffa1237d5_79987585',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c0ffa1237d5_79987585')) {function content_539c0ffa1237d5_79987585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form method="post">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="email" name="email" placeholder="Email" class="form-control" required/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required maxlength="25"/>
  <input type="submit" value="Register" name="register" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
