<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:01:16
         compiled from "layout/templates/rankings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085036254539bfff6db7b92-09719841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a7e7372e0d728cde96bed1e1911ea2febdf951' => 
    array (
      0 => 'layout/templates/rankings.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085036254539bfff6db7b92-09719841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfff6e084d9_28702665',
  'variables' => 
  array (
    'rankings' => 0,
    'rank' => 0,
    'rankPlayer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfff6e084d9_28702665')) {function content_539bfff6e084d9_28702665($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
      <a href="profile.php?player=<?php echo $_smarty_tpl->tpl_vars['rankPlayer']->value['player_id'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['rankPlayer']->value['username'];?>

      </a>
    </div>
  </div>
<?php } ?>
 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
