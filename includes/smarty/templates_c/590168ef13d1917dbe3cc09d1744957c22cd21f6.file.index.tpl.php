<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:01:06
         compiled from "layout/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416910127539bfc9c7c0e73-18036648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590168ef13d1917dbe3cc09d1744957c22cd21f6' => 
    array (
      0 => 'layout/templates/index.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416910127539bfc9c7c0e73-18036648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfc9c822ee3_68639687',
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfc9c822ee3_68639687')) {function content_539bfc9c822ee3_68639687($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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

 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
