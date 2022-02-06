<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 22:16:34
         compiled from "C:\xampp\htdocs\browsergame\app\Views\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2435353ac7f75f282c4-65343513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fda93da527000c584cd3ddf048f7691569fd985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\register.tpl',
      1 => 1403813790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435353ac7f75f282c4-65343513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac7f7602c3d7_02444923',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac7f7602c3d7_02444923')) {function content_53ac7f7602c3d7_02444923($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="index.php?route=Register&action=register" method="post">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="email" name="email" placeholder="Email" class="form-control" required/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required maxlength="25"/>
  <input type="submit" value="Register" name="register" class="btn btn-default"/>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
