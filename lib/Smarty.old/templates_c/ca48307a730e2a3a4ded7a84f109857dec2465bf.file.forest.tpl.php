<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:59:14
         compiled from "D:\Projects\browsergame\app\Views\forest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10223762614288d2b78845-19863946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca48307a730e2a3a4ded7a84f109857dec2465bf' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\forest.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10223762614288d2b78845-19863946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'monster' => 0,
    'report' => 0,
    'map' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_614288d2ba9d07_35585343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614288d2ba9d07_35585343')) {function content_614288d2ba9d07_35585343($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
