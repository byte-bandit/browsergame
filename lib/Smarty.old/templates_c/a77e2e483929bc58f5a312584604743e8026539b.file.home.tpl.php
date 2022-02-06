<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 21:39:41
         compiled from "C:\xampp\htdocs\browsergame\app\Views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3060353ac6d85b9f3f4-31568370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77e2e483929bc58f5a312584604743e8026539b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\home.tpl',
      1 => 1403811576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3060353ac6d85b9f3f4-31568370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac6d85c18596_13489046',
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6d85c18596_13489046')) {function content_53ac6d85c18596_13489046($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<h4>Welcome, <?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
!</h4>
You're level <?php echo $_smarty_tpl->tpl_vars['player']->value['level'];?>
<br/>
Experience <?php echo $_smarty_tpl->tpl_vars['player']->value['exp'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['expNext'];?>
<br/>
Health <?php echo $_smarty_tpl->tpl_vars['player']->value['health'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['maxHealth'];?>
<br/>
Energy <?php echo $_smarty_tpl->tpl_vars['player']->value['energy'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['maxEnergy'];?>
<br/>
STR <?php echo $_smarty_tpl->tpl_vars['player']->value['str'];?>
<br/>
DEX <?php echo $_smarty_tpl->tpl_vars['player']->value['dex'];?>
<br/>
INT <?php echo $_smarty_tpl->tpl_vars['player']->value['int'];?>
<br/>
Money <?php echo number_format($_smarty_tpl->tpl_vars['player']->value['money']);?>

 
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
