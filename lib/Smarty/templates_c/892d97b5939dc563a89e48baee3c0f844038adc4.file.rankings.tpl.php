<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:40:00
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\rankings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2012953a89eb0e72666-38250424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892d97b5939dc563a89e48baee3c0f844038adc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\rankings.tpl',
      1 => 1403557669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2012953a89eb0e72666-38250424',
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
  'unifunc' => 'content_53a89eb0edbe02_72459235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a89eb0edbe02_72459235')) {function content_53a89eb0edbe02_72459235($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
      <a href="app/profile.php?player=<?php echo $_smarty_tpl->tpl_vars['rankPlayer']->value['player_id'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['rankPlayer']->value['username'];?>

      </a>
    </div>
  </div>
<?php } ?>
 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
