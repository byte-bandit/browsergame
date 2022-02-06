<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 22:52:46
         compiled from "C:\xampp\htdocs\browsergame\app\Views\train.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3104253ac881ec35762-67503708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cdead67e668708c81405c4388d6b8fc6c722a64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\train.tpl',
      1 => 1403815923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3104253ac881ec35762-67503708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'whenCanTrain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac881ec83977_14456545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac881ec83977_14456545')) {function content_53ac881ec83977_14456545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p>Train daily to gain stats. You can train again: <?php echo $_smarty_tpl->tpl_vars['whenCanTrain']->value;?>
.</p>
 
<?php if ($_smarty_tpl->tpl_vars['whenCanTrain']->value=="now") {?>
  <form action="index.php?route=Train&action=train" method="post">
    <input type="submit" name="train" class="btn btn-default" value="Train now!"/>
  </form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
