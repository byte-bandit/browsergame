<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:11:58
  from 'D:\Projects\browsergame\app\Views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efcceecafe36_88212303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10eae5968916262c6e6b1a73661920758f0d0b95' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\home.tpl',
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
function content_61efcceecafe36_88212303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
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

 
<?php $_smarty_tpl->_subTemplateRender("file:Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
