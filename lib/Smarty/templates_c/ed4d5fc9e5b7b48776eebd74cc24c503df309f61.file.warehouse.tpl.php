<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:38:24
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\warehouse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24753a89e501608a5-09853660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4d5fc9e5b7b48776eebd74cc24c503df309f61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\warehouse.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24753a89e501608a5-09853660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player' => 0,
    'warehouse' => 0,
    'item' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a89e501d5bc5_73526615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a89e501d5bc5_73526615')) {function content_53a89e501d5bc5_73526615($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<h3>Equipment</h3>
 
<h4>First weapon</h4>
<?php echo $_smarty_tpl->tpl_vars['player']->value['firstWeapon']['name'];?>
<br/>
<h4>Second weapon</h4>
<?php echo $_smarty_tpl->tpl_vars['player']->value['secondWeapon']['name'];?>

<h4>Helmet</h4>
<?php echo $_smarty_tpl->tpl_vars['player']->value['helmet']['name'];?>

<h4>Armour</h4>
<?php echo $_smarty_tpl->tpl_vars['player']->value['armour']['name'];?>
<br/>
<h4>Gloves</h4>
<?php echo $_smarty_tpl->tpl_vars['player']->value['gloves']['name'];?>
<br/>
<h4>Boots</h4>
<?php echo $_smarty_tpl->tpl_vars['player']->value['boots']['name'];?>

 
<hr/>
<h3>Items</h3>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warehouse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <h3><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]['name'];?>
 X <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</h3>
  <h4><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]['description'];?>
</h4>
  <form method="post">
    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]["wearable"]) {?>
      <input type="hidden" name="wear" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
"/>
      <input type="submit" value="Equip" class="btn btn-default"/>
    <?php } elseif ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]["usable"]) {?>
      <input type="hidden" name="use" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
"/>
      <input type="submit" value="Use" class="btn btn-default"/>
    <?php }?>
  </form>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
  You don't have any items
<?php } ?>
 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
