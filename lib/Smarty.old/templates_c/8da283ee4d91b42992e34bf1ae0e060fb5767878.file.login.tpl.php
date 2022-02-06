<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 22:03:11
         compiled from "C:\xampp\htdocs\browsergame\app\Views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187253ac6bb4c25a51-48073696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da283ee4d91b42992e34bf1ae0e060fb5767878' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\login.tpl',
      1 => 1403811844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187253ac6bb4c25a51-48073696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac6bb4e488d6_99567940',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6bb4e488d6_99567940')) {function content_53ac6bb4e488d6_99567940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="index.php?route=Login&action=login" method="post" class="form-inline">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required/>
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
