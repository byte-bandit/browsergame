<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:38:14
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\hero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1511653a890d5c1d317-01138000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902d5e3c00e86412e30260250fea77a3082b7b1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\hero.tpl',
      1 => 1403559490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1511653a890d5c1d317-01138000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a890d5c34a11_74927513',
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a890d5c34a11_74927513')) {function content_53a890d5c34a11_74927513($_smarty_tpl) {?><div class="panel panel-default">
  <div class="panel-body">
    <b><?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
</b>
    <br>
    <img src="Layout/images/player/base/human_m.png" \>
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
