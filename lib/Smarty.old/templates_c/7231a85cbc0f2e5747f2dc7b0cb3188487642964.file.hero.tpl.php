<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 21:06:54
         compiled from "layout\templates\hero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2302253a87aceb38896-61047498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7231a85cbc0f2e5747f2dc7b0cb3188487642964' => 
    array (
      0 => 'layout\\templates\\hero.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2302253a87aceb38896-61047498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a87acebb58b6_78476724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a87acebb58b6_78476724')) {function content_53a87acebb58b6_78476724($_smarty_tpl) {?><div class="panel panel-default">
  <div class="panel-body">
    <b><?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
</b>
    <br>
    <img src="layout/images/player/base/human_m.png" \>
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
