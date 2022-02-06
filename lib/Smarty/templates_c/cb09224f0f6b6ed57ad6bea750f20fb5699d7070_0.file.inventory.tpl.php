<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:12:03
  from 'D:\Projects\browsergame\app\Views\inventory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efccf35219d7_12327342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb09224f0f6b6ed57ad6bea750f20fb5699d7070' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\inventory.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Parts/header.tpl' => 1,
    'file:Parts/footer.tpl' => 1,
  ),
),false)) {
function content_61efccf35219d7_12327342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warehouse']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <h3><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]['name'];?>
 X <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</h3>
  <h4><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]['description'];?>
</h4>
  
  <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]["wearable"]) {?>
  <form action="index.php?route=Inventory&action=wear_item" method="post">
    <input type="hidden" name="wear" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
"/>
    <input type="submit" value="Equip" class="btn btn-default"/>
  </form>
  <?php } elseif ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['item_id']]["usable"]) {?>
  <form action="index.php?route=Inventory&action=use_item" method="post">
    <input type="hidden" name="use" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
"/>
    <input type="submit" value="Use" class="btn btn-default"/>
  </form>
  <?php }?>
  
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
  You don't have any items
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
<?php $_smarty_tpl->_subTemplateRender("file:Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
