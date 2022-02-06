<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:39:48
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:455753a89ea48c66b5-13054016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad18995cb0a81ce4c3604f12727ced548ba938b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\shop.tpl',
      1 => 1403559490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '455753a89ea48c66b5-13054016',
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
  'unifunc' => 'content_53a89ea493f859_84206388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a89ea493f859_84206388')) {function content_53a89ea493f859_84206388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
        <br><br><img src="Layout/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"/>
      </div>
      <div class="col-md-9" style="border=1; border-radius=1em; background-color=#335599;">
        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
        <h4><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['price']);?>
 currency</h4>
        <form method="post">
          <input type="hidden" name="buy" value="<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
"/>
          <input type="submit" value="Buy" class="btn btn-info"/>
        </form>
      </div>
    </div>
  <?php }?>
<?php } ?>
 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
