<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:11:58
  from 'D:\Projects\browsergame\app\Views\Parts\hero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efcceee31183_47827980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df65964178ab702484a9f178525298f2932046' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\Parts\\hero.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61efcceee31183_47827980 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
  <div class="panel-body">
    <b><?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
</b>
    <br>
    <img src="images/player/base/human_m.png" \>
    <ul class="nav nav-pills nav-stacked">
      <li>Level: <?php echo $_smarty_tpl->tpl_vars['player']->value['level'];?>
</li>
      <li>Exp: <?php echo $_smarty_tpl->tpl_vars['player']->value['exp'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['expNext'];?>
</li>
      <li>Health <?php echo $_smarty_tpl->tpl_vars['player']->value['health'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['maxHealth'];?>
</li>
      <li>Energy <?php echo $_smarty_tpl->tpl_vars['player']->value['energy'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['maxEnergy'];?>
</li>
      <li>STR <?php echo $_smarty_tpl->tpl_vars['player']->value['str'];?>
</li>
      <li>DEX <?php echo $_smarty_tpl->tpl_vars['player']->value['dex'];?>
</li>
      <li>INT <?php echo $_smarty_tpl->tpl_vars['player']->value['int'];?>
</li>
      <li>Gold <?php echo number_format($_smarty_tpl->tpl_vars['player']->value['money']);?>
</li>
    </ul>
    <div class="well">
      <?php if ($_smarty_tpl->tpl_vars['player']->value['pet']) {?>
        <?php echo $_smarty_tpl->tpl_vars['player']->value['pet'];?>

      <?php } else { ?>
        No pet
      <?php }?>
    </div>
  </div>
</div><?php }
}
