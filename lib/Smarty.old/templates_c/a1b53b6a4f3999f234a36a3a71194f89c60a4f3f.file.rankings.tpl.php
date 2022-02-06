<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:59:06
         compiled from "D:\Projects\browsergame\app\Views\rankings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1543222068614288ca817935-64416221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b53b6a4f3999f234a36a3a71194f89c60a4f3f' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\rankings.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1543222068614288ca817935-64416221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rankings' => 0,
    'rank' => 0,
    'rankPlayer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_614288ca8588d9_36989057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614288ca8588d9_36989057')) {function content_614288ca8588d9_36989057($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<?php  $_smarty_tpl->tpl_vars['rankPlayer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rankPlayer']->_loop = false;
 $_smarty_tpl->tpl_vars['rank'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rankings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rankPlayer']->key => $_smarty_tpl->tpl_vars['rankPlayer']->value) {
$_smarty_tpl->tpl_vars['rankPlayer']->_loop = true;
 $_smarty_tpl->tpl_vars['rank']->value = $_smarty_tpl->tpl_vars['rankPlayer']->key;
?>
  <div class="panel panel-default">
    <div class="panel-body">
      <?php echo $_smarty_tpl->tpl_vars['rank']->value+1;?>

       - 
      <a href="index.php?route=Profile&action=index&player=<?php echo $_smarty_tpl->tpl_vars['rankPlayer']->value['player_id'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['rankPlayer']->value['username'];?>

      </a>
    </div>
  </div>
<?php } ?>
 
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
