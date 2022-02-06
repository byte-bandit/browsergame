<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:58:19
         compiled from "D:\Projects\browsergame\app\Views\shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6627352676142889b49d475-56644659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e4b5dd4795396f69ac44a60a39ede2deaa161e5' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\shop.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6627352676142889b49d475-56644659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6142889b4d78f2_30897301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6142889b4d78f2_30897301')) {function content_6142889b4d78f2_30897301($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<h4>Item shop</h4>
 
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
  <?php if ($_smarty_tpl->tpl_vars['item']->value['price']) {?>
    <div class="row">
      <div class="col-md-3 text-center">
        <br><br><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"/>
      </div>
      <div class="col-md-9" style="border=1; border-radius=1em; background-color=#335599;">
        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
        <h4><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price']);?>
 currency</h4>
        <form action="index.php?route=Shop&action=buy" method="post">
          <input type="hidden" name="buy" value="<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
"/>
          <input type="submit" value="Buy" class="btn btn-info"/>
        </form>
      </div>
    </div>
  <?php }?>
<?php } ?>
 
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
