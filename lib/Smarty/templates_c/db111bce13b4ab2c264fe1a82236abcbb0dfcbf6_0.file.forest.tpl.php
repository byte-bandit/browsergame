<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:12:07
  from 'D:\Projects\browsergame\app\Views\forest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efccf702f602_49767370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db111bce13b4ab2c264fe1a82236abcbb0dfcbf6' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\forest.tpl',
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
function content_61efccf702f602_49767370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
<?php }
} else { ?>
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

<?php $_smarty_tpl->_subTemplateRender("file:Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
