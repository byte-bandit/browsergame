<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:38:36
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\forest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2339653a89e5cae10c5-10181364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dda0ccfbcd1d9f03e507b25d3465c81320a5633' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\forest.tpl',
      1 => 1403559490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2339653a89e5cae10c5-10181364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'monster' => 0,
    'map' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a89e5cb469e0_52854884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a89e5cb469e0_52854884')) {function content_53a89e5cb469e0_52854884($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['monster']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['monster']->value['name'];?>
</h3>
<img src="Layout/images/<?php echo $_smarty_tpl->tpl_vars['monster']->value['image'];?>
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
