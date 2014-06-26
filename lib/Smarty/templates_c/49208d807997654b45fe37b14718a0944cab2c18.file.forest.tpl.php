<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:01:21
         compiled from "layout/templates/forest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750019309539c014cb922f0-19220498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49208d807997654b45fe37b14718a0944cab2c18' => 
    array (
      0 => 'layout/templates/forest.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750019309539c014cb922f0-19220498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539c014cbe6302_32246118',
  'variables' => 
  array (
    'monster' => 0,
    'map' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c014cbe6302_32246118')) {function content_539c014cbe6302_32246118($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<?php if ($_smarty_tpl->tpl_vars['monster']->value) {?>
  <h3><?php echo $_smarty_tpl->tpl_vars['monster']->value['name'];?>
</h3>
  <img src="layout/images/<?php echo $_smarty_tpl->tpl_vars['monster']->value['image'];?>
"/><br>
  Attack: <?php echo $_smarty_tpl->tpl_vars['monster']->value['strength'];?>
<br/>
  Def: <?php echo $_smarty_tpl->tpl_vars['monster']->value['defense'];?>
<br/><br/>
  
  <form method="post">
    <input type="submit" name="fight" value="Fight"/>
  </form><br/><br/>
<?php } else { ?>
  <h4><?php echo $_smarty_tpl->tpl_vars['map']->value['name'];?>
</h4>
<?php }?>
 
<?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
  <div class="well">
    <?php echo $_smarty_tpl->tpl_vars['report']->value;?>

  </div>
<?php }?>
 
<form method="post">
  <input type="submit" name="explore" value="Explore"/>
</form>
 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
