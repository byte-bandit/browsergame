<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:38:30
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\train.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2986753a89e56d16268-04523420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee99bc10d75dc28e95ceba86f470d9e941ae47c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\train.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2986753a89e56d16268-04523420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'whenCanTrain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a89e56d6fff1_27431952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a89e56d6fff1_27431952')) {function content_53a89e56d6fff1_27431952($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p>Train daily to gain stats. You can train again: <?php echo $_smarty_tpl->tpl_vars['whenCanTrain']->value;?>
.</p>
 
<?php if ($_smarty_tpl->tpl_vars['whenCanTrain']->value=="now") {?>
  <form method="post">
    <input type="submit" name="train" class="btn btn-default" value="Train now!"/>
  </form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
