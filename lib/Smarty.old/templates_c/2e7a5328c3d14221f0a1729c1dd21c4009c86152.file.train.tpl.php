<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:58:46
         compiled from "D:\Projects\browsergame\app\Views\train.tpl" */ ?>
<?php /*%%SmartyHeaderCode:679700731614288b6367a89-92173348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7a5328c3d14221f0a1729c1dd21c4009c86152' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\train.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679700731614288b6367a89-92173348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'whenCanTrain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_614288b639a9f1_06176699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614288b639a9f1_06176699')) {function content_614288b639a9f1_06176699($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p>Train daily to gain stats. You can train again: <?php echo $_smarty_tpl->tpl_vars['whenCanTrain']->value;?>
.</p>
 
<?php if ($_smarty_tpl->tpl_vars['whenCanTrain']->value=="now") {?>
  <form action="index.php?route=Train&action=train" method="post">
    <input type="submit" name="train" class="btn btn-default" value="Train now!"/>
  </form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
