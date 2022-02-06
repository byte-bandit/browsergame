<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 23:13:32
         compiled from "C:\xampp\htdocs\browsergame\app\Views\forest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1954953ac8c81596f53-44768791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30c5da4cff87e481fec6de34fcc4c51fe44ec16c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\forest.tpl',
      1 => 1403817204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954953ac8c81596f53-44768791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac8c816083f9_57915068',
  'variables' => 
  array (
    'monster' => 0,
    'report' => 0,
    'map' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac8c816083f9_57915068')) {function content_53ac8c816083f9_57915068($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['monster']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['monster']->value['name'];?>
</h3>
<img src="images/<?php echo $_smarty_tpl->tpl_vars['monster']->value['image'];?>
"/><br>
Attack: <?php echo $_smarty_tpl->tpl_vars['monster']->value['strength'];?>
<br/>
Def: <?php echo $_smarty_tpl->tpl_vars['monster']->value['defense'];?>
<br/><br/>

<?php if (!$_smarty_tpl->tpl_vars['report']->value) {?>
<form action="index.php?route=Forest&action=fight" method="post">
    <input type="submit" name="fight" value="Fight"/>
</form><br/><br/>
<?php }?>
<?php } else { ?>
<h4><?php echo $_smarty_tpl->tpl_vars['map']->value['name'];?>
</h4>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
<div class="well">
<?php echo $_smarty_tpl->tpl_vars['report']->value;?>

</div>
<?php }?>

<form action="index.php?route=Forest&action=explore" method="post">
    <input type="submit" name="explore" value="Explore"/>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
