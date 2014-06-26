<?php /* Smarty version Smarty-3.1.18, created on 2014-06-14 09:45:54
         compiled from "layout/templates/train.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980616954539bfdb2471896-44857434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f23b0a4d7cbd9bfbf3677e18080383d1722b8052' => 
    array (
      0 => 'layout/templates/train.tpl',
      1 => 1402731874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980616954539bfdb2471896-44857434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'whenCanTrain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfdb24b8c94_71008995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfdb24b8c94_71008995')) {function content_539bfdb24b8c94_71008995($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p>Train daily to gain stats. You can train again: <?php echo $_smarty_tpl->tpl_vars['whenCanTrain']->value;?>
.</p>
 
<?php if ($_smarty_tpl->tpl_vars['whenCanTrain']->value=="now") {?>
  <form method="post">
    <input type="submit" name="train" class="btn btn-default" value="Train now!"/>
  </form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
