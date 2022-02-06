<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 22:40:53
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2889653a890d5b791e9-11996266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a8ec6272d6de241d50e4a96d41595ca559d328' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\index.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2889653a890d5b791e9-11996266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a890d5bea680_07745156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a890d5bea680_07745156')) {function content_53a890d5bea680_07745156($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
