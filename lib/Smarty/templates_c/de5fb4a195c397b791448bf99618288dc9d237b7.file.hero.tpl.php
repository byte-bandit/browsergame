<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:01:07
         compiled from "layout/templates/hero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1833466661539c05f3900455-53856145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de5fb4a195c397b791448bf99618288dc9d237b7' => 
    array (
      0 => 'layout/templates/hero.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833466661539c05f3900455-53856145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539c05f3901456_77422565',
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c05f3901456_77422565')) {function content_539c05f3901456_77422565($_smarty_tpl) {?><div class="panel panel-default">
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
