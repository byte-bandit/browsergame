<?php
/* Smarty version 4.0.0, created on 2022-01-25 16:16:49
  from 'D:\Projects\browsergame\app\Views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61f02271514e01_37830930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74252b2bf81d035d8a1dd51f51a3a667381277da' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\login.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Parts/header.tpl' => 1,
    'file:Parts/footer.tpl' => 1,
  ),
),false)) {
function content_61f02271514e01_37830930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="index.php?route=Login&action=login" method="post" class="form-inline">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required/>
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
