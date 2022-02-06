<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:57:54
         compiled from "D:\Projects\browsergame\app\Views\Parts\hero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4663474206142888287dd03-93496967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f67f786020bf1c5c92f7090570daab22281d538' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\Parts\\hero.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4663474206142888287dd03-93496967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_614288828bca75_42445065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614288828bca75_42445065')) {function content_614288828bca75_42445065($_smarty_tpl) {?><div class="panel panel-default">
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
</div><?php }} ?>
